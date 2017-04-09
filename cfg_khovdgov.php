<?php

define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/", true);
define("APP_ROOT", DOC_ROOT . "/orbitnews/", true);
define("WEB_ROOT", "http://localhost:9090/orbitnews/", true);
define("SEC_ROOT", APP_ROOT . "sections/", true);
define("INC_ROOT", APP_ROOT . "includes/", true);
define("PAGE_ROOT", APP_ROOT . "pages/", true);

define("JS_PATH", WEB_ROOT . "assets/js/", true);
define("CSS_PATH", WEB_ROOT . "assets/css/", true);
define("IMG_PATH", WEB_ROOT . "assets/images/", true);
define("FONT_PATH", WEB_ROOT . "assets/fonts/", true);

$app_config = array();
$app_config['environment'] = "local";
$app_config['current_web_app_lang'] = "mn";
$app_config['upload_path_year_month'] = date("Y_m");

$app_config['PAGE_CURRENT_FULL_LINK'] = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$app_config['GOOGLE_SERVER_API_KEY_1'] = "AIzaSyBgytplmgE8iHqD2N3Pt69LK8j8uOiLQaE";

//------- MongoliaX config -----------
$app_config['phone_ads_prefix'] = "PAR_PIC";
$app_config['phone_ads_img_upload_path'] = "uploads/news/pictures/";
$app_config['show_popup_model'] = false;
$app_config['front_per_page_articles'] = 5;
$app_config['phone_ads_min_code'] = 1000200;

$app_config['WEB_ROOT_WITH_LANG'] = WEB_ROOT;

$smallest_X = 300;
$smaller_X = 550;
$small_X = 850;
$large_X = 1050;

$app_config['default_resizes_image'] = array($smallest_X, $smaller_X, $small_X, $large_X);

include(INC_ROOT . "class.MySQLDB.php");
//include(INC_ROOT . "class.clnt.html.php");
//include(INC_ROOT . "class.clnt.tools.php");
//include(INC_ROOT . "simple-php-captcha.php");
//include(INC_ROOT . "htmlpurifier/HTMLPurifier.standalone.php");

//$clientHTML = new \mongoliax\includes\client_HTML\client_HTML();
//$clientHTML->App_Config = $app_config;
//$purifier = new HTMLPurifier();
//$_SESSION['captcha'] = simple_php_captcha();
