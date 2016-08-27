<?php
class Header {
  private $header_string;

  public function __construct($values) {
    $this->update_title($values["title"]);
    $this->update_header_css($values["css"]);
    $this->update_header_js($values["js"]);

  }
  public function update_header_css($value_to_add) {

    foreach ($value_to_add as $value) {
      $string = "<link type=\"text/css\" rel=\"stylesheet\" href=\"css/".$value."\">";
      $this->header_string .= $string;
    }

  }

  public function update_header_js($value_to_add) {
    foreach ($value_to_add as $value) {
      $string = "<script async type=\"text/javascript\" src=\"js/".$value."\"></script>";
      $this->header_string .= $string;
    }
  }

  public function update_title($value_to_add) {
    $string = "<title>$value_to_add</title>" ;
    $this->header_string .= $string;
  }

  public function render_header($header_path) {
    include(VIEW_PATH.$header_path);
  }
}

class View {

  public function render_view($values) {
    include(VIEW_PATH.$values["view"]);
    }

  }



?>
