<footer class="page-footer">

	<div class="container">
		<p class="copyright">© 2020 Все права защищены, «Листовая диагностика»</p>
	</div>

</footer>
<?php get_template_part('/modules/svg_icons'); ?>

<div class="cookie_box" style="display: none;">
	<p class="text">Этот сайт использует файлы cookie. <br><a href="/privacy_policy/" target="_blank">Подробнее</a></p>

	<p class="button btn btn_white js-cookie-close">Принять</p>
</div>

<script src="<?= get_stylesheet_directory_uri() . '/static/js/jquery-3.1.1.js'; ?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/static/js/jquery-migrate-1.4.1.min.js'; ?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/static/js/input.mask.bundle.min.js'; ?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/static/js/swiper.js'; ?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/static/js/jquery.cookie.js'; ?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/static/js/script.js'; ?>"></script>

<?php wp_footer(); ?>

</body>
</html>
