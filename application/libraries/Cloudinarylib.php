<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cloudinarylib
{
    protected $result =  array();
    public function __construct()
    {
        require 'cloudinary/src/Cloudinary.php';
        require 'cloudinary/src/Uploader.php';
        require 'cloudinary/src/Api.php';
        // configure Cloudinary API connection
        \Cloudinary::config(array(
            "cloud_name" => CLOUDINARY_CLOUD_NAME,
            "api_key" => CLOUDINARY_API_KEY, /*874837483274837*/
            "api_secret" => CLOUDINARY_API_SECRET /* a676b67565c6767a6767d6767f676fe1 */
        ));
    }


    /*
     * Upload image based on the args passed
     * Return the public Id of the image uploaded
     * */
    function upload_image( $args = array() ){
        if( !empty($args) ){
            try {
                if( !empty( $this->result)) unset( $this->result);
                $array = array(
                    'resource_type' => 'image',
                    'overwrite' => false,
                    'eager_async' => true,
                    'quality'   => 50,
                    'folder' => $args['folder']
                );
                if( isset($args['eager']) ) $array['eager'] = array($args['eager']);
                if( isset($args['public_id']) ) $array['public_id'] = $args['public_id'];

                // Upload image
                $result = \Cloudinary\Uploader::upload($args['filepath'],
                    $array
                );
                $this->result = $result;

            } catch (Exception $e) {
                return false;
            }
        }
    }
    /*
     * Called after image upload successful
     * Type - full_url, public_id, filename
     * */
    function get_result( $type = 'filename' ){
        if( !empty( $this->result ) ){
            switch ($type) {
                case 'full_url':
                    return $this->result['secure_url'];
                    break;
                case 'public_id':
                    return $this->result['public_id'];
                    break;
                case 'filename':
                    $explode = explode('/', $this->result['public_id']);
                    $filename = end( $explode);
                    $format = $this->result['format'];
                    return $filename.'.'.$format;
                    break;
                default:
                    return false;
            }

        }
    }

    function delete_image( $public_id ){
        try {
            $result = \Cloudinary\Uploader::destroy($public_id);
            // $result['status'] == 'ok'
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}