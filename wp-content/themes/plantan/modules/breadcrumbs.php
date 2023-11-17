<? $url = explode('/', get_page_uri()); ?>

<div class="breadcrumbs">
  <a href="/">Главная</a>
  <? foreach($url as $k => $item) { ?>
    <? $page = get_page_by_path( $item ); $name = get_the_title( $page ); ?>
    <svg><use href="#breadcrumbs_arrow"></use></svg>
    <? if( $k+1 == count($url) ) { ?>
      <span><?= $name; ?></span>
    <? } else { ?>
      <a href="<?= get_permalink( get_page_by_path( $item ) ); ?>"><?= $name; ?></a>
    <? } ?>
  <? } ?>
</div>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "/",
    "item": "<?= home_url(); ?>"
  },
  <? foreach($url as $k => $item) { ?>
    <? $page = get_page_by_path( $item ); $name = get_the_title( $page ); ?>
    {
      "@type": "ListItem",
      "position": <?= $k+1; ?>,
      <? if( $k+1 == count($url) ) { ?>
        "name": "<?= $name; ?>"
      <? } else { ?>
        "name": "<?= $name; ?>",
        "item": "<?= home_url(); ?>/wiki"
      <? } ?>
      <? if( $k+1 == count($url) ) { ?>
      }
      <? } else { ?>
      },
      <? } ?>
  <? } ?>

]
}
</script>
