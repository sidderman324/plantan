<?php
/*
Template Name: Страница информации
Template Post Type: post, page, portfolio
*/

get_header();
?>
<body>
  <?php get_template_part('/modules/menu'); ?>


  <main class="textpage">
    <div class="container">
      <h1><?= the_title(); ?></h1>

      <?php
      foreach (get_field('inner') as $key => $value) {

        if($value['acf_fc_layout'] == 'table') {
          $table_type = split(':', $value['table_item']['table_type'])[0]; ?>
          <section class="table table--<?= $table_type; ?>">
            <div class="table_head">
              <div class="row">
                <div class="cell"><?= $value['table_item']['table_head']['cell_1']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_2']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_3']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_4']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_5']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_6']; ?></div>
              </div>
            </div>
            <div class="table_body">

              <?php
              foreach ($value['table_item']['table_content'] as $key_content => $value_content) { ?>
                <div class="row">
                  <div class="cell"><?= $value_content['cell_1']; ?></div>
                  <div class="cell"><?= $value_content['cell_2']; ?></div>
                  <div class="cell"><?= $value_content['cell_3']; ?></div>
                  <div class="cell"><?= $value_content['cell_4']; ?></div>
                  <div class="cell"><?= $value_content['cell_5']; ?></div>
                  <div class="cell"><?= $value_content['cell_6']; ?></div>
                </div>
              <? } ?>

            </div>
          </section>
        <?php }
        if($value['acf_fc_layout'] == 'subtitle') { ?>
          <h2><?= $value['subtitle_item']; ?></h2>
        <?php }
        if($value['acf_fc_layout'] == 'text') { ?>
          <p><?= $value['text_item']; ?></p>
        <?php }
        if($value['acf_fc_layout'] == 'table_subtext') { ?>
          <div class="description size_3"><?= $value['text_item']; ?></div>
        <?php }
        if($value['acf_fc_layout'] == 'notification') { ?>
          <div class="notification"><?= $value['text_item']; ?></div>
        <?php }


        if($value['acf_fc_layout'] == 'info_table') { ?>
          <div class="table table--info" id="info">
            <div class="table_body">
              <? foreach ($value['row'] as $key_info => $value_info) {
                ?>
                <div class="row">
                  <div class="cell"><?= $value_info['name']; ?></div>
                  <div class="cell"><?= $value_info['content']; ?></div>
                </div>
              <?php } ?>
            </div>
          </div>
        <?php }

      }
      ?>


    </div>
  </main>






  <?php get_footer(); ?>