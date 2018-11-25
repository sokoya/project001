<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cloudinarylib {

    public function __construct()
    {

        require('cloudinary/src/Cloudinary.php');
        require 'cloudinary/src/Uploader.php';
        require 'cloudinary/src/Api.php';

        // configure Cloudinary API connection
        \Cloudinary::config(array(
            "cloud_name" => "de9lpikx3",
            "api_key" => "921392971762216", /*874837483274837*/
            "api_secret" => "3mm1rX2AFwtjvGjoV54Sb1knCVs" /* a676b67565c6767a6767d6767f676fe1 */
        ));
    }
}