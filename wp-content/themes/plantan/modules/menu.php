<header class="page-header">

	<div class="container">

		<a href="/" class="logo_instead"><span class="bold">Лаборатория</span><br>«Листовая диагностика»</a>

		<?php
		wp_nav_menu( [
			'theme_location'  => '',
			'menu'            => 'Меню в шапке',
			'container'       => 'nav',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'main_menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
			] );
			?>

		<!-- <nav class="main_menu">
			<ul>
				<li><a class="menu_link" href="/"><span>Главная</span></a></li>
				<li><a class="menu_link" href="/prices/"><span>Услуги</span></a></li>
				<li><a class="menu_link" href="/#preferences"><span>Преимущества</span></a></li>
				<li>
					<a class="menu_link" href="/sampling_program_apples/"><span>Программы</span> <svg class="down_arrow"><use xlink:href="#down_arrow"></use></svg></a>

					<ul class="submenu_list">
						<li><a href="/sampling_program_apples/">Яблоки</a></li>
						<li><a href="/sampling_program_grapes/">Виноград</a></li>
						<li><a href="/sampling_program_strawberry/">Клубника</a></li>
						<li><a href="/sampling_program_wheat/">Пшеница</a></li>
					</ul>

				</li>
				<li><a class="menu_link" href="/about/"><span>О нас</span></a></li>
				<li><a class="menu_link" href="/about/#info"><span>Контакты</span></a></li>
			</ul>
		</nav> -->


		<div class="burger_wrapper">
			<div class="burger"></div>
		</div>

	</div>

</header>
