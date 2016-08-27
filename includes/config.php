<?php
  //set php settings
  define("SITE_NAME", "saif_gallery_branch_info");
  ini_set("display_errors", true);
  error_reporting(E_ALL);

  //start the session
  session_start();

  //require View class
  include("Model.class.php");
  include("View.class.php");
  include("Controller.class.php");


  //define website root
  define("SITE_ROOT", $_SERVER["DOCUMENT_ROOT"]."/".SITE_NAME."/");

  // Config Class
  class Config {

  public static function set_area_vars() {

  $area = basename(dirname($_SERVER["SCRIPT_NAME"], 1),  "/");
  if ($area !== "manager") {
    define("PUB_PATH", "../public/");
    define("VIEW_PATH", SITE_ROOT."view/");
    define("CSS_PATH", "css/");
    define("MODEL_PATH", SITE_ROOT."model/");
    define("MINI_CONTROLLER_PATH", SITE_ROOT."mini_view_controllers/");
    define("MINI_MODEL_PATH", SITE_ROOT."mini_view_models/");
  }
  else  {
      define("PUB_PATH", "../public/manager/");
      define("VIEW_PATH", "../manager/view/");
    }

  }


  public static function redirect($location)  {
       header("Location: {$location}");
       exit;
   }



 }


Config::set_area_vars();


?>
