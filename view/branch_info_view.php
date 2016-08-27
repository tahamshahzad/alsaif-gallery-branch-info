<?php
  // $data = $values["data"];
  // $times = sizeof($data);
  // $ref = "";
  // $end = '</div></div>';
  // for ($i=0; $i<$times; $i++) {
  //   if(!($data[$i][1] == $ref)) {
  //     $ref = $data[$i][1];
  //     $branch_title = $data[$i][3];
  //     $title = '<div class="city_branch_outer_container" id="'.$ref.'">
  //     <div class="city_branch_title" >
  //     <h3 class="branch_title all_zero ">'
  //     .$branch_title.
  //     '</h3>
  //     </div>
  //     <div class="city_branch_container_wrapper ">';
  //     echo $title;
  //   }
  //
  //     $branch_info_full =
  //     '<div class="city_branch_container">
  //     <h3 class="branch_content_name all_zero font_weight_300">
  //     </h3>
  //     <h3 class="branch_content_add all_zero font_weight_300" data-coordinates ='.$data[$i][5].','.$data[$i][6].'>'.
  //     $data[$i][4]
  //     .'</h3>
  //     <h3 class="branch_content_phone all_zero font_weight_300 ">
  //     <a class="brach_content_call_link" href="tel:0591770874" dir="ltr">'.
  //     $data[$i][5]
  //     .'</a>
  //     </h3>
  //     </div>';
  //     echo $branch_info_full;
  //
  //     if ($data[$i+1][1] != $ref) {
  //         echo $end;
  //     }
  //     if (($i+1) == ($times-1)) {
  //       break;
  //     }
  // }
?>
<script>
  <?php
echo"var contentData = ".$values["data"].";";
  ?>
</script>
