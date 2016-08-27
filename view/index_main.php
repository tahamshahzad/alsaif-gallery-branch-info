<body class="strech_wdt_hit" ontouchstart="">
<div class="go_up_btn_container display_none">
  <div class="go_up_btn_inner_container">
    <a href="#wrapper"><i class="fa fa-angle-up up_arrow" aria-hidden="true"></i></a>
  </div>
</div>
<div class="text_c" id ="wrapper">
  <div class="heading_container strech_wdt ">
    <h1 class="page_heading all_zero">فروعنا</h1>
  </div>
  <div class="branch_time_container text_c ">
  <p class="branch_time font_weight_300 margin_auto_center">
      جميع الفروع تفتح من 9 صباحا حتى 1 ظهرا ومن 4 عصرا حتى 11 مساءا و الجمعة من 4 عصرا حتى 11.30 مساءا
    </p>
  </div>
  <div class="locate_container text_c text_r flx_cnt">
    <!-- <span class="locate_icon display_inl_blk"></span> -->
    <i class="fa fa-map-marker map_locate_marker" aria-hidden="true"></i>&nbsp&nbsp<h3 class="display_inl_blk locate_title all_zero font_weight_300"> أقرب فرع منك</h3>
  </div>
    <div class="main_list_container strech_wdt text_r">
      <ul class="list_heading_container all_zero">
        <li class="list_heading">تحديد منطقة</li>
      </ul>
      <div class="list_items_container flx_cnt">
        <ul  class="list_items all_zero display_inl_blk area_list area_list_normal_color">
          <li class="area_name" data-area="north">المنطقة الشمالية</li>
          <li class="area_name" data-area="central">المنطقة الوسطى</li>
          <li class="area_name" data-area="south">المنطقة الجنوبية</li>
          <li class="area_name" data-area="east">المنطقة الشرقية</li>
          <li class="area_name" data-area="west">المنطقة الغربية</li>
        </ul>
        <ul  class="list_items all_zero display_inl_blk city_list">

        </ul>
    </div>
</div>
</div>
<div class="content_container text_c">
  <?php
  include(MINI_CONTROLLER_PATH.$values["inner_controller"][0]);
  ?>
</div>
<script src="js/saif_gal_main.js"></script>
</body>
</html>
