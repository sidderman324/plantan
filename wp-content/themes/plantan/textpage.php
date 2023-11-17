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

      <?php get_template_part('/modules/breadcrumbs'); ?>

    </div>

    <div class="container">
      <h1><?= the_title(); ?></h1>
    </div>



    <?php
    foreach (get_field('inner') as $key => $value) {

      if($value['acf_fc_layout'] == 'table') {
        $table_type = explode(':', $value['table_item']['table_type'])[0]; ?>
        <section class="table table--<?= $table_type; ?>">
          <div class="container">
            <div class="table_head">
              <div class="row">
                <div class="cell"><?= $value['table_item']['table_head']['cell_1']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_2']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_3']; ?></div>
                <?php if($value['table_item']['table_head']['cell_4'] != '') { ?>
                  <div class="cell"><?= $value['table_item']['table_head']['cell_4']; ?></div>
                <? } ?>
                <?php if($value['table_item']['table_head']['cell_5'] != '') { ?>
                  <div class="cell"><?= $value['table_item']['table_head']['cell_5']; ?></div>
                <? } ?>
                <?php if($value['table_item']['table_head']['cell_6'] != '') { ?>
                  <div class="cell"><?= $value['table_item']['table_head']['cell_6']; ?></div>
                <? } ?>
              </div>
            </div>
            <div class="table_body">

              <?php
              foreach ($value['table_item']['table_content'] as $key_content => $value_content) { ?>
                <div class="row">
                  <div class="cell"><?= $value_content['cell_1']; ?></div>
                  <div class="cell"><?= $value_content['cell_2']; ?></div>
                  <div class="cell"><?= $value_content['cell_3']; ?></div>
                  <?php if($value_content['cell_4'] != '') { ?>
                    <div class="cell"><?= $value_content['cell_4']; ?></div>
                  <? } ?>
                  <?php if($value_content['cell_5'] != '') { ?>
                    <div class="cell"><?= $value_content['cell_5']; ?></div>
                  <? } ?>
                  <?php if($value_content['cell_6'] != '') { ?>
                    <div class="cell"><?= $value_content['cell_6']; ?></div>
                  <? } ?>
                </div>
              <? } ?>

            </div>
          </div>
        </section>
      <?php }



      if($value['acf_fc_layout'] == 'illustrations') { ?>
        <section class="illustrations">
          <div class="container">
            <? if($value['title']) { ?>
              <h2 class="text size_2"><?= $value['title']; ?></h2>
            <? } ?>

            <? if($value['decription']) { ?>
              <div class=""><?= $value['decription']; ?></div>
            <? } ?>

            <div class="ill_list <? if($value['wide_image'] == 1) { echo 'ill_list--wide'; }?>">
              <? foreach ($value['illustrations_list'] as $key => $item) { ?>
                <div class="item">
                  <? if($item['image_text']) { ?>
                    <p class="text size_2"><?= $item['image_text']; ?></p>
                  <? } ?>
                  <img src="<?= $item['image_item']['url']; ?>" alt="<?= $item['image_item']['alt']; ?>">
                </div>
              <? } ?>
            </div>
          </div>
        </section>
      <?php }



      if($value['acf_fc_layout'] == 'table_sampling') { ?>
        <section class="table table--equal table_sampling">
          <div class="container">
            <div class="table_head">
              <div class="row">
                <div class="cell"><?= $value['table_item']['table_head']['cell_1']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_2']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_3']; ?></div>
                <div class="cell"><?= $value['table_item']['table_head']['cell_4']; ?></div>
              </div>
            </div>
            <div class="table_body">

              <?php
              foreach ($value['table_item']['table_content'] as $key_content => $row) { ?>
                <div class="row">
                  <div class="cell"><?= $row['cell_1']; ?></div>
                  <div class="cell cell_3">
                    <? foreach ($row['veg_stage'] as $key => $cell) { ?>
                      <div class="cell_inner">
                        <div class="cell"><?= $key+1; ?>. <?= $cell['stage']; ?></div>
                        <div class="cell"><?= $cell['part']; ?></div>
                        <div class="cell"><?= $cell['count']; ?></div>
                      </div>
                    <? } ?>
                  </div>
                </div>
              <? } ?>

            </div>
          </div>
        </section>
      <?php }



      if($value['acf_fc_layout'] == 'subtitle') { ?>
        <div class="container">
          <h2><?= $value['subtitle_item']; ?></h2>
        </div>
      <?php }
      if($value['acf_fc_layout'] == 'text') { ?>
        <div class="container">
          <p><?= $value['text_item']; ?></p>
        </div>
      <?php }
      if($value['acf_fc_layout'] == 'table_subtext') { ?>
        <div class="container">
          <div class="description size_3"><?= $value['text_item']; ?></div>
        </div>
      <?php }
      if($value['acf_fc_layout'] == 'notification') { ?>
        <div class="container">
          <div class="notification"><?= $value['text_item']; ?></div>
        </div>
      <?php }


      if($value['acf_fc_layout'] == 'info_table') { ?>
        <div class="table table--info" id="info">
          <div class="container">
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
        </div>
      <?php }


      if($value['acf_fc_layout'] == 'link_cards') { ?>
        <section class="program_block program_block--links">
          <div class="container">

            <div class="text_box">
              <h2><?= $value['title']; ?></h2>

              <p class="text size_1"><?= $value['description']; ?></p>
            </div>

            <? if($value['cards_list']) { foreach ($value['cards_list'] as $key => $card) { ?>

              <a href="<?= $card['card_link']; ?>" class="link_card">
                <span><?= $card['card_text']; ?></span>
                <img src="<?= $card['card_image']['url']; ?>" alt="<?= $card['card_image']['alt']; ?>" title="<?= $card['card_image']['caption']; ?>">
              </a>

            <? } } ?>


          </div>
        </section>
      <?php }

    }
    ?>



  </main>






  <?php get_footer(); ?>
