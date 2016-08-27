<?php

$view_meta_data = new Model("branch_view_model.json", true);

$body_content = $view_meta_data->get_body_content();

$view = new View();

$file = fopen("../data_files/branch_info.csv","r");

$data;

while (!feof($file)) {
  $data[] = fgetcsv($file);
}
fclose($file);

$size = sizeof($data);

$last_outer_object_name = "";
$last_inner_object_name = "";
$branch_object = "";

$json_array = [];

for ($i = 0; $i<$size; $i++) {
  $outer_object = $data[$i][0];
  $inner_object = $data[$i][1];

if( !( isset($json_array[$outer_object]) ) ) {
  $last_outer_object_name = $data[$i][0];
  $json_array[$outer_object] = [];
}
if( !(isset($json_array[$outer_object][$inner_object]) ) ) {
    $json_array[$outer_object][$inner_object] = [];
    $json_array[$outer_object][$inner_object]["arabicName"] = $data[$i][3];
    $json_array[$outer_object][$inner_object]["branches"] = [];
}
$json_array[$outer_object][$inner_object]["branches"][] = ["cityName" => $data[$i][2], "add" => $data[$i][4], "phone" => $data[$i][5], "lat" => $data[$i][6], "long" => $data[$i][7]];

  if($i+1 == $size-1) {
    break;
  }
}
$data = json_encode($json_array, JSON_UNESCAPED_UNICODE);


$view->render_view(["view" => $body_content["view"], "data" => $data]);



?>
