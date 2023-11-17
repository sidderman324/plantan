<?php
/*
Template Name: Блог
Template Post Type: post, page, portfolio
*/

get_header();
?>
<body>
  <?php get_template_part('/modules/menu'); ?>


  <main id="blogPage" class="blogPage">

    <div class="container">
      <?php get_template_part('/modules/breadcrumbs'); ?>

      <h1>Статьи</h1>
    </div>

    <section class="artcleBlock">

      <div class="container">

        <?php

        $current_page = !empty( $_GET['page'] ) ? $_GET['page'] : 1;

        $query = new WP_Query(
          array(
            'post_type' => 'blog',
            'posts_per_page' => 10,
            'order' => 'ASC',
            'paged' => $current_page
          )
        ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $slug = $query->post->post_name;

        $article_data = get_field('article_data');
        // $card_data = $article_data['card_data'];
        ?>

        <div class="article_card">
          <a href="<?php the_permalink(); ?>" class="link"></a>
          <div class="img_wrapper">
            <img src="/==store==/content/green-fresh-apples-as-background.jpg" alt="">
          </div>
          <div class="text_wrapper">
            <p class="text size_2 bold"><? the_title(); ?></p>
            <p class="text size_xs date"><?= get_the_date(); ?></p>
            <p class="text size_1"><?= $article_data['description']; ?></p>
          </div>
        </div>

        <?php
      endwhile;
      wp_reset_postdata();
    endif; ?>



  </div>

  <div class="container">
    <?
    echo '<div class="pagination">';
    echo paginate_links( array(
      'base' => home_url($wp->request) . '/%_%',
      'format' => '?page=%#%',
      'total' => $query->max_num_pages,
      'current' => $current_page,
      'prev_next' => True,
      'prev_text' => __('<span class="btn btn--arrow btn--prev"><span class="arrow"></span></span>'),
      'next_text' => __('<span class="btn btn--arrow btn--next"><span class="arrow"></span></span>'),
    ) );

    echo '</div>';
    ?>
  </div>

</section>

</main>


<?php get_footer(); ?>
