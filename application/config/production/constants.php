<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


// My Constants
// Database Table
defined('DB_NAME')		OR define('DB_NAME', 'onitshamarket');

defined('CLOUDINARY_CLOUD_NAME') OR define('CLOUDINARY_CLOUD_NAME', "onitshamarket");
defined('CLOUDINARY_API_KEY') OR define('CLOUDINARY_API_KEY', "225471712598732");
defined('CLOUDINARY_API_SECRET') OR define('CLOUDINARY_API_SECRET', "CAg5I2si21ibz-bFx-U759ljqTk");

defined('CATEGORY_IMAGE_FOLDER') OR define('CATEGORY_IMAGE_FOLDER',  'onitshamarket/images/category/'); # Slider Image
defined('CATEGORY_IMAGE_PATH') OR define('CATEGORY_IMAGE_PATH',  'https://res.cloudinary.com/onitshamarket/image/upload/q_auto/f_auto/' .CATEGORY_IMAGE_FOLDER); # Slider Image



defined('PRODUCT_IMAGE_FOLDER') OR define('PRODUCT_IMAGE_FOLDER', "onitshamarket/product/");
defined('PRODUCTS_IMAGE_PATH') OR define('PRODUCTS_IMAGE_PATH', "https://res.cloudinary.com/onitshamarket/image/upload/q_auto/f_auto/" . PRODUCT_IMAGE_FOLDER);

defined('SLIDER_IMAGE_FOLDER') OR define('SLIDER_IMAGE_FOLDER',  'onitshamarket/images/slider/'); # Slider Image
defined('SLIDER_IMAGE_PATH') OR define('SLIDER_IMAGE_PATH',  'https://res.cloudinary.com/onitshamarket/' .SLIDER_IMAGE_FOLDER); # Slider Image

defined('STATIC_CATEGORY_FOLDER') OR define('STATIC_CATEGORY_FOLDER',  'onitshamarket/images/static/'); # Category Header Image
defined('STATIC_CATEGORY_PATH') OR define('STATIC_CATEGORY_PATH',  'https://res.cloudinary.com/onitshamarket/image/upload/q_auto:low/f_auto/' .STATIC_CATEGORY_FOLDER); # Category Header Image


// General Settings
defined('PAGE_CONTACT_US') or define('PAGE_CONTACT_US', "https://www.onitshamarket.com/pages/contact/");

// Details
// Bitly
defined('BITLY_USERNAME') OR define('BITLY_USERNAME', 'sokoyaphilip');
defined('BITLY_API') OR define('BITLY_API', '172c6fb6841362cd510ac05bc704cf545825a295');

// SMS
defined('SMS_USERNAME') OR define('SMS_USERNAME', 'ArtisansUsers');
defined('SMS_API') OR define('SMS_API', '2825a7e7a5988803c97852627500f5fc658964550c8cfe5616305acb352f127a');
defined('SMS_FOR_ORDERS') OR define('SMS_FOR_ORDERS', false);

//Elastic Email
defined('ELASTIC_EMAIL_API') OR define('ELASTIC_EMAIL_API', '5fe25354-f5e7-4bee-8001-ab0080b72c4c');


defined('INTERSWITCH_MAC_KEY') OR define('INTERSWITCH_MAC_KEY', 'D3D1D05AFE42AD50818167EAC73C109168A0F108F32645C8B59E897FA930DA44F9230910DAC9E20641823799A107A02068F7BC0F4CC41D2952E249552255710F');
defined('INTERSWITCH_PRODUCT_ID') OR define('INTERSWITCH_PRODUCT_ID', '1076');
defined('INTERSWITCH_PAY_ITEM_ID') OR define('INTERSWITCH_PAY_ITEM_ID', '101');
defined('INTERSWITCH_RESPONSE_URL') OR define('INTERSWITCH_RESPONSE_URL', 'https://sandbox.interswitchng.com/collections/api/v1/gettransaction.json'); // Live : https://webpay.interswitchng.com/collections/api/v1/gettransaction.json
//defined('INTERSWITCH_REQUERY_URL') OR define('INTERSWITCH_REQUERY_URL', 'https://sandbox.interswitchng.com/collections/api/v1/gettransaction.json');  //"https://webpay.interswitchng.com/collections/api/v1/gettransaction.json?$ponmo"; // LIVE
defined('INTERSWITCH_HOST_URL') OR define('INTERSWITCH_HOST_URL', 'sandbox.interswitchng.com'); // webpay.interswitchng.com
defined('INTERSWITCH_ACTION_URL') OR define('INTERSWITCH_ACTION_URL', 'https://sandbox.interswitchng.com/collections/w/pay'); // Live : https://webpay.interswitchng.com/collections/w/pay


