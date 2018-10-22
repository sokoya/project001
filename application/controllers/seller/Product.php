<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{

    public function __construct(){
        // @todo
        // Check if the user is already logged in
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('seller_model', 'seller');
        if( !$this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $from = $this->session->userdata('referred_from');
            if( !empty($from) ) redirect($from);
            redirect('seller/login');
        }
         // $this->output->enable_profiler(TRUE);
//        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
//        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
//        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
//        $this->output->set_header('Pragma: no-cache');
    }

    public function index(){
        if( $this->input->post('rootcategory') && $this->input->post('category') && $this->input->post('subcategory')  ){
            $chosen_array = array(
                'rootcategory' => $this->input->post('rootcategory'),
                'category' => $this->input->post('category'),
                'subcategory' => $this->input->post('subcategory')
            );
            $this->session->set_userdata($chosen_array);
//            print_r( $chosen_array );
            redirect('seller/product/create');
        }else{
            // Unset the category
            $this->session->unset_userdata('rootcategory');
            $this->session->unset_userdata('category');
            $this->session->unset_userdata('subcategory');
            $this->load->helper('query_helper');
            $page_data['page_title'] = 'Choose Category';
            $page_data['pg_name'] = 'product';
            $page_data['sub_name'] = 'select_category';
            $page_data['profile'] = $this->seller->get_profile_details(base64_decode($this->session->userdata('logged_id')),
                'first_name,last_name,email,profile_pic');
            $this->load->view('seller/choose_category', $page_data);
        }
    }

    /**
     *
     */
    public function create(){

        // check if we have the category session set
        if( $this->session->has_userdata('rootcategory')  && $this->session->has_userdata('category') && $this->session->has_userdata('subcategory') ){
            $this->load->helper('query_helper');
            $new_session = array();
            $new_session['sub_id'] = $sub_id = $this->session->userdata('subcategory');
            $new_session['new_rootcategory'] = $this->seller->get_category_name($this->session->userdata('rootcategory'), 'root_category')->name;
            $new_session['new_category'] = $this->seller->get_category_name($this->session->userdata('category'), 'category')->name;
            $new_session['new_subcategory'] = $this->seller->get_category_name($sub_id, 'sub_category')->name;

            $page_data['specifications'] = $this->seller->get_specification($sub_id);
            $this->session->set_userdata( $new_session );
            // Check if post method
            $page_data['page_title'] = 'Add product';
            $page_data['pg_name'] = 'product';
            $page_data['sub_name'] = 'add_product';
            $page_data['profile'] = $this->seller->get_profile_details(base64_decode($this->session->userdata('logged_id')),
                'first_name,last_name,email,profile_pic');
            // check the specification attached with the sub category
            $this->load->view('create', $page_data);
        }else{
            // redirect to make a selection of category
            $this->session->set_flashdata('error_msg', 'Info. : You need to Select a Category first for the product.');
            redirect('seller/product');
        }
    }

    public function process(){
        if( $this->input->post() || isset($_FILES) ){

            $pricing_error = $image_error = 0;
            $return['status'] = 'error';
            $return['message'] = '';
                // Product Block
            $certifications = $this->input->post('certifications');
            $certifications = (!empty($certifications) ) ? json_encode($certifications) : '';
            $warranty_type = $this->input->post('warranty_type');
            $warranty_type = ( !empty($warranty_type) ) ? json_encode( $warranty_type ) : '';
            $colour_family = $this->input->post('colour_family');
            $colour_family = ( !empty( $colour_family) ) ? json_encode( $colour_family ) : '';
            $sku = $this->product->generate_code();
            $product_table = array(
                'seller_id' => base64_decode($this->session->userdata('logged_id')),
                'sku' => $sku,
                'rootcategory' => $this->session->userdata('new_rootcategory'),
                'category' => $this->session->userdata('new_category'),
                'subcategory' => $this->session->userdata('new_subcategory'),
                'product_name' => cleanit($this->input->post('product_name')),
                'brand_name' => cleanit($this->input->post('brand_name')),
                'model' => cleanit($this->input->post('model')),
                'main_colour' => cleanit($this->input->post('main_colour')),
                'product_description' => htmlentities($this->input->post('product_description'), ENT_QUOTES),
                'youtube_id' => cleanit($this->input->post('youtube_id')),
                'in_the_box' => htmlentities($this->input->post('in_the_box'), ENT_QUOTES),
                'highlights' => htmlentities($this->input->post('highlights'), ENT_QUOTES),
                'product_line' => cleanit( $this->input->post('product_line')),
                'colour_family' => $colour_family,
                'main_material' => cleanit($this->input->post('main_material')),
                'dimensions' => cleanit($this->input->post('dimensions')),
                'weight'    => cleanit($this->input->post('weight')),
                'product_warranty' => htmlentities($this->input->post('product_warranty') , ENT_QUOTES),
                'warranty_type' => $warranty_type,
                'warranty_address' => $this->input->post('warranty_address'),
                'certifications' => $certifications,
                'product_status' => 'pending',
                'created_on' => get_now()
            );


            //     Product Features Block
            // Since we are getting the specification name; we loop through the specification json
            // SELECT id FROM specifications WHERE spec_name = 'POST_KEY'
            $attributes = array();
            foreach($_POST as $post => $value ){
                if( substr_compare('attribute_',$post,0,10 ) == 0 ){
                    // we found a match
                    // check if its a multiple
//                    {"Features":[" Anti Glare"],"Display":"gps"}
                    // @TODO: fix the multiple value
                    $feature_name = explode('_', $post);
                    if( is_array($post) && !empty($value)){
                        $x= json_encode($value);
                        $attributes[$feature_name[1]] = json_encode(json_decode($x));
                    }elseif(!empty($value)){
                        $attributes[$feature_name[1]] = trim($value);
                    }
                }
            }
            $product_table['attributes'] = json_encode($attributes);
            $product_id  = $this->seller->insert_data('products', $product_table);
            // Product Variation Block
            $count_check = sizeof($this->input->post('sale_price'));
            // Declare all variables
            $variation = $this->input->post('variation');
            $sku = $this->input->post('sku');
            $isbn = $this->input->post('isbn');
            $quantity = $this->input->post('quantity');
            $sale_price = $this->input->post('sale_price');
            $discount_price = $this->input->post('discount_price');
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            if( $count_check > 0 ){
                for( $i = 0; $i < $count_check; $i++ ){
                    $variation_data['product_id'] = $product_id;
                    $variation_data['variation'] = $variation[$i];
                    $variation_data['sku']      = $sku[$i];
                    $variation_data['isbn']     = $isbn[$i];
                    $variation_data['quantity']  = $quantity[$i];
                    $variation_data['sale_price'] = $sale_price[$i];
                    $variation_data['discount_price'] = $discount_price[$i];
                    $variation_data['start_date'] = $start_date[$i];
                    $variation_data['end_date'] = $end_date[$i];
                    // if( $variation_data['variation'] == '' ||
                    //     $variation_data['sku'] == '' ||
                    //     $variation_data['isbn'] == '' ||
                    //     $variation_data['quantity'] == '' ||
                    //     $variation_data['discount_price'] == '' ||
                    //     $variation_data['start_date'] == '' ||
                    //     $variation_data['end_date'] == ''  )
                    //     continue;
                    // create a new variation row
                    if( !is_int($this->seller->insert_data('product_variation', $variation_data) ) ){
                        throw new Exception( 'There was an error inserting the variation' . $this->seller->insert_data('product_variation', $variation_data));
                    }
                }
            }

            // Product Gallery Block
            if( isset($_FILES) ){
            $counts = sizeof($_FILES['file']['tmp_name']);
            $product_gallery = array(
                'product_id'    => $product_id,
                'seller_id' => base64_decode($this->session->userdata('logged_id')),
                'created_at' => get_now()
            );
            $files = $_FILES;
            for ( $x = 0; $x < $counts; $x++ ){
                $old_name = $files['file']['name'][$x];
                $_FILES['file']['name']= $files['file']['name'][$x];
                $_FILES['file']['type']= $files['file']['type'][$x];
                $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$x];
                $_FILES['file']['error']= $files['file']['error'][$x];
                $_FILES['file']['size']= $files['file']['size'][$x];

                // Call cloudinary upload
                @move_uploaded_file($_FILES['file']['tmp_name'], './assets/'.$_FILES['file']['name'] );
                $upload_result = $this->upload_image( realpath('./assets/'.$_FILES['file']['name']), $this->input->post('product_name') );
                // $filename = $this->do_upload('file');
                if( $upload_result ){
                    unlink(realpath('./assets/'.$_FILES['file']['name']));
                    // version|filename.extension
                    $product_gallery['image_name'] = $upload_result['version'] . '|' . $upload_result['public_id'] .'.'. $upload_result['format'];
                    // check featured image
                    $product_gallery['featured_image'] = ( isset($_POST['featured_image']) && ($old_name == $_POST['featured_image'] )) ? 1 : 0;
                    // insert
                    if( !is_int($this->seller->insert_data('product_gallery', $product_gallery)) ){
//                                throw new Exception( 'Could not insert the image');
                        $image_error++;
                    }
                }
            }// end of for loop

        }

            // Check for errors
            if( $pricing_error > 0 ){
                $return['message'] = 'Error: There was an error submitting one of the pricing variation. Go to "Manage Product > Pricing Variation" to fix it.';
            }elseif( $image_error > 0 ){
                $return['message'] = 'Error: There was an error submitting one of the Image. Go to "Manage Product" to fix it.';
            }else{
                // New product mail to be sent to the seller
                $return['status'] = 'success';
                $return['message'] = 'Success: Your product has been created, awaiting reviews and approval. You will be notified via email.';
            }
            echo json_encode($return);
            exit;
        }
    }


    function upload_image( $filepath, $product_name ){
        $this->load->library('cloudinarylib');
        $return = \Cloudinary\Uploader::upload( $filepath, 
                            array("tags" => $product_name, 
                                "resource_type" => "image", 
                                "folder" => "product",
                                "eager" => array(
                                    array("width" => 500, "height" => 500, "crop" => "pad")
                                )
                            )
                        );
        return $return;
    }

    /**
     * @param int : root_category_id
     * @return:  JSON categories id, name
     */
    function append_category(){
        $this->load->helper('query_helper');
        $id = $this->input->post('id');
        if( !is_null($id) ){
            echo json_encode(get_categories_by_root_id($id) , JSON_UNESCAPED_SLASHES);
        }
        exit;
    }

    /**
     * @param int : category_id
     * @return:  JSON sub categories id, name
     */
    function append_sub_category(){
        $this->load->helper('query_helper');
        $id = $this->input->post('id');
        if( !is_null($id) ){
            echo json_encode(get_subcategories_by_cat_id($id) , JSON_UNESCAPED_SLASHES);
        }
        exit;
    }
}