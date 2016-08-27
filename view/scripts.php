<script defer src="js/essential.js"></script>
<script defer src="js/ajax.js"></script>
<script defer src="../../bower_components/jquery/dist/jquery.js"></script>
<script defer src="../../bower_components/bootstrap/dist/js/bootstrap.js"></script>
                                                                                                                                                                                  <?php
// page dependant js file, name will given in the render function's second parameter
// second parameter is an associative array.
// key for js file will be named 'js_file' and value will be the name of the js file
  if(isset($js_file)) {
    echo "<script defer src=\"js/".$js_file.".js\"></script>";
  }
?>
