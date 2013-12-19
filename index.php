<?php

$pagename = ( isset($_GET['pagename']) )? $_GET['pagename'] : "home" ;

$pages = array(
                'default' => "home",
                'catering' => "catering",
                'reviews' => "reviews",
                'not-found' => "404"
              );
$menupages = array("appetizers", "lunch", "dinner");

define("LAYOUT_PATH", "layouts");
define("TEMP_PATH", "templates");
define("INC_PATH", "includes");
define("IMG_PATH", "images");
define("CSS_PATH", "css");
define("JS_PATH", "js");
define("VENDOR_JS_PATH", "js/vendor");
define("FOUNDATION_JS_PATH", "js/foundation-4.0.3.custom");

include_once('layouts/application.php');
?>