<?php
/*
Template Name: Главная страница
Template Post Type: post, page, portfolio
*/

get_header();
?>
<body>
	<?php get_template_part('/modules/menu'); ?>




	<main id="frontPage" class="frontPage">
		<section class="promo_screen">
			<div class="container">
				<div class="text_block">
					<p class="text size_2 uppercase">Метод получения высокого урожая</p>
					<h1>Листовая диагностика</h1>
					<p class="text size_1 description">Вносить ли удобрения, и какие? Приведет ли внесение удобрений к росту урожая и как отразится на его качестве? <br>На все эти вопросы может ответить только Листовая диагностика.</p>
					<a href="#stepsSlider" class="btn">Подробнее</a>
				</div>
			</div>
		</section>


		<section class="steps_block" id="steps">
			<div class="container">
				<div class="swiper-container" id="stepsSlider">
					<div class="swiper-wrapper steps_wrapper">
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 1-й</span>
							<p class="step_title text size_2 bold">Определение объемов</p>
							<p class="step_descr text size_3 center">От количества собранных образцов зависит представительность результата анализа</p>

							<div class="img_wrapper">
								<svg class="step_1"><use xlink:href="#step_1"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 2-й</span>
							<p class="step_title text size_2 bold">Отбор образцов</p>
							<p class="step_descr text size_3 center">Надежность рекомендаций во многом зависят от правильного отбора образцов</p>

							<div class="img_wrapper">
								<svg class="step_2"><use xlink:href="#step_2"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 3-й</span>
							<p class="step_title text size_2 bold">Подготовка пробы</p>
							<p class="step_descr text size_3 center">Для избежания изменений в образце он должен быть доставлен в 24 часовой срок</p>

							<div class="img_wrapper">
								<svg class="step_3"><use xlink:href="#step_3"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 4-й</span>
							<p class="step_title text size_2 bold">Анализ образца в лаборатории</p>
							<p class="step_descr text size_3 center">Используемые нами методы диагностики, широко применяются за рубежом</p>

							<div class="img_wrapper">
								<svg class="step_4"><use xlink:href="#step_4"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 5-й</span>
							<p class="step_title text size_2 bold">Обработка результатов</p>
							<p class="step_descr text size_3 center">Полученные результаты подвергаются математическому и статистическому анализу</p>

							<div class="img_wrapper">
								<svg class="step_5"><use xlink:href="#step_5"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
						<div class="step_item swiper-slide">
							<span class="step_num">Этап 6-й</span>
							<p class="step_title text size_2 bold">Вынесение заключения</p>
							<p class="step_descr text size_3 center">По завершению заказчику выдается подробный протокол с рекомендациями и результатами</p>

							<div class="img_wrapper">
								<svg class="step_6"><use xlink:href="#step_6"></use></svg>
								<div class="circle"></div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="protocol_example">
			<div class="container">
				<h2>Пример <span class="bold">протокола</span></h2>

				<p class="text size_1">После того, как будет проведена диагностика, вам будет предоставлена подробная протокол с результатами анализа, включающий сравнение с нормами и краткие рекомендации по питанию растений.</p>
				<p class="text size_1">Протокол будет содержать информацию о выявленных проблемах и нарушениях, а также рекомендации по внесению тех или иных элементов питания для достижения лучших результатов.</p>

				<div class="protocol_wrapper">
					<img src="<?= get_stylesheet_directory_uri(); ?>/example.jpg" alt="">
				</div>

				<a href="<?= get_stylesheet_directory_uri(); ?>/example.pdf" download="Образец протокола Листовой диагностики" class="btn">Скачать pdf</a>
			</div>
		</section>


		<section class="preferences" id="preferences">
			<div class="container">

				<h2><span class="bold">Проведение анализа</span> позволяет</h2>

				<div class="preferences_wrapper">
					<div class="preference_item">
						<span class="number">1</span>
						<p class="text size_2 bold">Своевременно</p>
						<p class="text size_1">определить потребности растения</p>
					</div>
					<div class="preference_item">
						<span class="number">2</span>
						<p class="text size_2 bold">Скорректировать</p>
						<p class="text size_1">дозы внесения удобрений</p>
					</div>
					<div class="preference_item">
						<span class="number">3</span>
						<p class="text size_2 bold">Повысить</p>
						<p class="text size_1">урожайность культуры</p>
					</div>
					<div class="preference_item">
						<span class="number">4</span>
						<p class="text size_2 bold">Увеличить</p>
						<p class="text size_1">стрессоусточивость растений</p>
					</div>
					<div class="preference_item">
						<span class="number">5</span>
						<p class="text size_2 bold">Поднять</p>
						<p class="text size_1">качество и сроки хранения продукции</p>
					</div>
				</div>


			</div>
		</section>


		<section class="program_block">
			<div class="container">

				<div class="text_box">
					<h2><span class="bold">Сезонная</span> программа</h2>

					<p class="text size_1">Для получения полной картины баланса питательных веществ, анализ проводится в несколько этапов.</p>
					<p class="text size_1">Полученные результаты по валовому содержанию 12 наиболее важных для растения элементов питания сравниваются с разработанными нормами.</p>
					<p class="text size_1">На основе этого сравнения делается экспертное заключение и решается вопрос об использовании тех или иных удобрений.</p>
				</div>

				<a href="/sampling_program_apples/" class="link_card">
					<span>яблоки</span>
					<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/program_apple.jpg" alt="">
				</a>
				<a href="/sampling_program_grapes/" class="link_card">
					<span>виноград</span>
					<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/program_grape.jpg" alt="">
				</a>

				<a href="/sampling_program_strawberry/" class="link_card">
					<span>клубника</span>
					<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/program_strawberry.jpg" alt="">
				</a>
				<a href="/sampling_program_wheat/" class="link_card">
					<span>пшеница</span>
					<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/program_wheat.jpg" alt="">
				</a>

				<a href="/sampling_program_apples/" class="link_card link_card--big">
					<span>все программы</span>
					<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/program_veg.jpg" alt="">
				</a>


			</div>
		</section>


		<section class="about" id="about">
			<div class="container">
				<span class="bgr_text">АГРО</span>

				<div class="row">

					<div class="left_block">
						<h2><span class="bold">О лаборатории</span><br><span class="small">«Листовая диагностика»</span></h2>
						<a href="/about/" class="btn btn--transparent">Подробнее</a>
					</div>

					<div class="img_wrapper">
						<img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/microscope.png" alt="">
					</div>

					<div class="right_block">
						<p class="text size_3">Консультативно-экспертная лаборатория «Листовая диагностика» более 15 лет успешно занимается вопросами минерального питания сельскохозяйственных растений.</p>
						<p class="text size_3">Химико-аналитическая группа лаборатории успешно прошла сличительные испытания с ведущими отечественными и зарубежными лабораториями, в частности с Региональной лабораторией по сельскому хозяйству и виноградарству в г. Оз (Франция).</p>
					</div>
				</div>
			</div>
		</section>


		<section class="feedback">
			<div class="container">
				<h2><span class="bold">Заинтересовались?</span></h2>
				<p class="descr">Оставьте контакты, мы с вами свяжемся</p>

				<?= do_shortcode('[contact-form-7 id="111" title="Обратная связь"]'); ?>


			</div>
		</section>

	</main>


	<div class="feedback_popup">
		<div class="close_btn"></div>
		<div class="message" id="message"></div>
	</div>

	<div class="feedback_bgr"></div>




	<?php get_footer(); ?>
