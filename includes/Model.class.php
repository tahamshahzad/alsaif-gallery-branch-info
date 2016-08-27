<?php
class Model {

  private $file_path;
  private $page_data;



  public function __construct($fn, $mini_model) {
    if ($mini_model == true)
     {
      $this->file_path = MINI_MODEL_PATH.$fn;
    }
    else {
      $this->file_path = MODEL_PATH.$fn;
    }
      $this->set_file_data();
  }

  public function set_file_data () {
    $a = json_decode(file_get_contents($this->file_path), true);
    $this->page_data = $a;
  }

  public function get_file_data() {
    return $this->page_data;
  }

  public function get_header() {
    return $this->page_data["header"];
  }

  public function get_body_content() {
    return $this->page_data["body"];
  }

}
?>
