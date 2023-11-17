<?php
/**
* The template for displaying all single posts
*/

get_header();
$article_data = get_field('article_data');
$card_data = $article_data['card_data'];
$content = $article_data['content'];

?>
<body>
  <?php get_template_part('/modules/menu'); ?>

  <main class="blogArticle">

    <article class="wikiArticle_item">
      <div class="promo">
        <div class="container">

          <?php get_template_part('/modules/breadcrumbs'); ?>

          <h1><? the_title(); ?></h1>
          <p class="text size_xs date"><?= get_the_date(); ?></p>
        </div>
      </div>
      <div class="container common_text">
        <!-- <? print_r($article_data); ?> -->

        <?= $article_data['article_content']; ?>
      </div>
    </article>

  </main>


  <?
  get_footer();
