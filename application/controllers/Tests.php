<?php
ini_set('max_execution_time', 0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    /*
     * A function to generate fake product list
     * */
    public function faker(){
        $this->load->model('test_model', 'test');
        $products = $this->test->get_products();
        if( $products ){
            foreach ( $products as $product) {
                $new_category_id = rand(1,37);
                $new_product = (array) $product;
                // Make a new product for this row
                $id = $new_product['id'];
                unset($new_product['id']); // remove the primary key
                $new_product['category_id'] = $new_category_id;
                $new_product['created_on'] = get_now();
                $new_product_id = $this->test->insert_data('products', $new_product);
                // Get variations
                $variation_loop = rand(1,3);
                $variations = $this->test->get_variations( $id );
                $sale_price = rand(2000,10000);
                $sku = rand(1000,1000000);
                $i = 1;
//                var_dump( $variations ); exit;
                if( $variations ) {
                    foreach( $variations as $variation ){
                        $variation_array = (array) $variation;
                        unset( $variation_array['id']);
                        do {
                            $variation_array['product_id'] = $new_product_id;
                            $variation_array['variation'] = $variation_array['variation'] . $i;
                            $variation_array['sale_price'] = $sale_price;
                            if( !empty($variation_array['discount_price']) ){
                                // Playing around :)
                                $variation_array['sale_price'] = $sale_price + $sale_price + $sku ;
                                $variation_array['discount_price'] = $sale_price;
                            }
                            $variation_array['sku'] = $sku;
                            $i++;
                            --$variation_loop;
                            $this->test->insert_data('product_variation', $variation_array);
                        } while ($variation_loop > 0 );
                    }
                }

                // Get gallery
                $image_db = array(
                    'c81fb13777b701cb8ce6cdb7f0661f1b.png',
                    '054062d2801cfbe9c782dd92daace4fd.jpg',
                    'abea0e72a29ecdda01d951a37fa4a91f.png',
                    'fb9ac918ec0ef2f1b950b240528cd2bf.png',
                    '6f181f206b8555c5dc619bc206ab35ad.jpg',
                    'e39a411b54c3ce46fd382fef7f632157.jpg'
                );

                $images = $this->test->get_images($id);
                $image_loop = rand(1, 3);
                $x = 1;
                if( $images ) {
                    foreach ($images as $image ) {
                        $image_array = (array) $image;
                        unset($image_array['id']);
                        do {
                            if( $x > 1) $image_array['featured_image'] = 0;
                            $index = array_rand($image_db, 1);
                            $image_array['product_id'] = $new_product_id;
                            $image_array['image_name'] = $image_db[$index];
                            --$image_loop;
                            $image_array['created_at'] = get_now();
                            $this->test->insert_data('product_gallery', $image_array);
                            $x++;
                        } while ($image_loop > 0 );
                    }
                }
            }
        }
    }

    function run_faker(){
        $this->benchmark->mark('code_start');
        $x = 1;
//        $this->faker();
        do {
            $this->faker();
            sleep(10);
            $x++;
        } while ($x < 4 );
        echo '<br />Faker script finished running ... ' . date('Y-m-d H:i:s');
        $this->benchmark->mark('code_end');
        echo $this->benchmark->elapsed_time('code_start', 'code_end');
    }

    public function memcache() {
//        $this->load->driver('cache', array(
//            'adapter' => 'memcached',
//            'backup' => 'file'
//        ));
//        var_dump($this->cache->get('foo'));
//        $this->cache->save('foo', 'test test', 300);
//        var_dump($this->cache->get('foo'));

        $memcached_enabled = $this->cache->memcached->is_supported();
        if(!$memcached_enabled) {  echo "Memcached is not installed";  die; }
    }
}