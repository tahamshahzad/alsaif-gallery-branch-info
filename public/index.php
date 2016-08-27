<?php
require ("../includes/config.php");

$index_page_meta_data = new Model("index_data.json", false);

$header_data = $index_page_meta_data->get_header();

$header = new Header($header_data);

$header->render_header("header.php");

$body_data = $index_page_meta_data->get_body_content();

$view = new View();

$view->render_view( [ "view" => $body_data["view"], "inner_controller" => $body_data["miniController"] ]);













 ?>
