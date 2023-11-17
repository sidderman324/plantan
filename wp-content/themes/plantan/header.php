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

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri()?>/favicon/apple-touch-icon.png?v=1">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri()?>/favicon/favicon-32x32.png?v=1">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri()?>/favicon/favicon-16x16.png?v=1">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri()?>/favicon/site.webmanifest?v=1">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri()?>/favicon/safari-pinned-tab.svg?v=1" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="theme-color" content="#ffffff">

  <? $page_id = get_the_ID(); ?>

  <? if($page_id == 127 || $page_id == 205 || $page_id == 257 || $page_id == 196 || $page_id == 216 || $page_id == 138) { ?>
    <meta name="robots" content="noindex"/> 
    <meta name="robots" content="nofollow"/>  
  <? } ?>

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/static/css/style.css'; ?>">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/style.css'; ?>">


  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();
     for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
     k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
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
