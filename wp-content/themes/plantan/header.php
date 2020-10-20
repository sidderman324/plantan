<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
  <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . '/favicon.ico'; ?>">
	<title><?= the_field('title'); ?></title>
	<meta name="description" content="<?php the_field('description'); ?>">
	<meta name="keywords" content="<?php the_field('keywords'); ?>">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/static/css/style.css'; ?>">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/style.css'; ?>">

	<script src="<?= get_stylesheet_directory_uri() . '/static/js/jquery-3.1.1.js'; ?>"></script>
	<script src="<?= get_stylesheet_directory_uri() . '/static/js/jquery-migrate-1.4.1.min.js'; ?>"></script>
	<script src="<?= get_stylesheet_directory_uri() . '/static/js/input.mask.bundle.min.js'; ?>"></script>
	<script src="<?= get_stylesheet_directory_uri() . '/static/js/swiper.js'; ?>"></script>
	<script src="<?= get_stylesheet_directory_uri() . '/static/js/script.js'; ?>"></script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(52789165, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/52789165" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</head>

