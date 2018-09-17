<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yeomify generator</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

	<div id='app'
		class="main">

		<!--~~~~~ Header ~~~~~-->
		<header
			class="header">
			<div
				class="content-center">

				<div
					class="header__top">

					<a
						href="#"
						title="ecos Корейская косметика"
						class="logo">
						ecos Корейская косметика
					</a>

					<div
						class="header__contacts">
						<div
							class="phone">
							+7 (495) 456-55-77
						</div>
						<div
							class="email">
							<a
								href="matilto:info@melany.ru">
								info@melany.ru
							</a>
						</div>
					</div>

				</div>

				<ul
					class="header-menu">
					<li
						class="header-menu__item">
						<a
							href="#"
							title="О компании"
							class="header-menu__link">
							О компании
						</a>
					</li>
					<li
						class="header-menu__item header-menu__item_active">
						<a
							href="#"
							title="Продукция"
							class="header-menu__link">
							Продукция
						</a>
					</li>
					<li
						class="header-menu__item">
						<a
							href="#"
							title="Схема работы"
							class="header-menu__link">
							Схема работы
						</a>
					</li>
					<li
						class="header-menu__item">
						<a
							href="#"
							title="Преимущества"
							class="header-menu__link">
							Преимущества
						</a>
					</li>
					<li
						class="header-menu__item">
						<a
							href="#"
							title="Прайс-лист"
							class="header-menu__link">
							Прайс-лист
						</a>
					</li>
					<li
						class="header-menu__item">
						<a
							href="#"
							title="Контакты"
							class="header-menu__link">
							Контакты
						</a>
					</li>
				</ul>

				<div
					class="header__content">

					<div
						class="header__title">
						КОРЕЙСКАЯ <br>
						КОСМЕТИКА <br>
						ОПТОМ
					</div>

					<ul
						class="header-list">
						<li
							class="header-list__item">
							Маржинальность до 80%.
						</li>
						<li
							class="header-list__item">
							Официальные поставки.
						</li>
						<li
							class="header-list__item">
							Сертификаты EAC.
						</li>
						<li
							class="header-list__item">
							Со склада в Москве.
						</li>
					</ul>

					<a
						href="#"
						title=""
						class="btn-download-price">
						<span>
							Скачать прайс
						</span>
						с формой заказа
					</a>

				</div>

				<div
					class="header__oreder">
					<div
						class="header__oreder-title">
						Напишите нам <br>
						и мы ответим на <br>
						все ваши вопросы
					</div>
					<form
						class="form-order">
						<div
							class="form-row">
							<input v-model="request.name"
								type="text"
								class="input-text"
								placeholder="Ваше имя"
							/>
						</div>
						<div
							class="form-row">
							<input
                                v-mask="'+7 (###) ###-##-##'"
                                v-model="request.phone"
								type="text"
								class="input-text"
								placeholder="Телефон"
							/>
						</div>
						<div
							class="form-row">
							<input v-model="request.email"
								type="text"
								class="input-text"
								placeholder="E-mail"
							/>
						</div>
						<div
							class="form-row">
							<input v-model="request.city"
								type="text"
								class="input-text"
								placeholder="Город"
							/>
						</div>
						<div
							class="form-row">
							<input v-model="request.organization"
								type="text"
								class="input-text"
								placeholder="Название организации"
							/>
						</div>
						<div
							class="form-row">
							<input v-model="request.site"
								type="text"
								class="input-text"
								placeholder="Сайт"
							/>
						</div>
						<div
							class="order-footer">
							<input @click="makeRequest('Форма вверху')"
								type="button"
								value="Отправить"
								title="Отправить"
								class="button get-thank-you-popup"
							/>
						</div>
					</form>
				</div>

			</div>
		</header>

		<!--~~~~~ Benefits ~~~~~-->
		<div
			class="benefits">

			<h1>
				ВСЕ В ОДНОМ
			</h1>

			<div
				class="sub-title-text">
				Мы позаботились обо всем, чтобы косметика была функциональной, качественной и интересной.
				За вами только донести ее до покупателя.
			</div>

			<ul
				class="benefits-list">
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-1.png"
							alt="Сертифицированный и качественный продукт"
						/>
					</div>
					<div
						class="benefits-list__title">
						Сертифицированный и качественный продукт
					</div>
					Все продукты имеют сертификаты качества EAC.
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-2.png"
							alt="Мультибренды"
						/>
					</div>
					<div
						class="benefits-list__title">
						Мультибренды
					</div>
					Широкий портфель брендов
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-3.png"
							alt="Быстрая скорость отгрузки"
						/>
					</div>
					<div
						class="benefits-list__title">
						Быстрая скорость отгрузки
					</div>
					Мы оперативно собираем заказ. Вся косметика на складе в Москве и готова к отгрузке в течении дня.
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-4.png"
							alt="Оптимальные оптовые цены"
						/>
					</div>
					<div
						class="benefits-list__title">
						Оптимальные оптовые цены
					</div>
					Работая с нами вы получаете косметику по оптимальным ценам и получаете высокую наценку
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-5.png"
							alt="Адекватная минимальная партия"
						/>
					</div>
					<div
						class="benefits-list__title">
						Адекватная минимальная партия
					</div>
					Минимальная партия всего 30 000 рублей. Количество позиций любое.
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-6.png"
							alt="Описания на каждую единицу товара"
						/>
					</div>
					<div
						class="benefits-list__title">
						Описания на каждую единицу товара
					</div>
					Все товары промаркированы и имеют описания на русском языке согласно закона.
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-7.png"
							alt="Средний и премиальный сегмент"
						/>
					</div>
					<div
						class="benefits-list__title">
						Средний и премиальный сегмент
					</div>
					Мы работаем с качественной косметикой, в которой заявленные свойства работают
				</li>
				<li
					class="benefits-list__item">
					<div
						class="benefits-list__icon">
						<img
							src="images/icon-benefits-8.png"
							alt="Помощь в подборе ассортимента"
						/>
					</div>
					<div
						class="benefits-list__title">
						Помощь в подборе ассортимента
					</div>
					Мы поможем подобрать ассортимент для  магазина, чтобы предложения не противоречили друг другу.
				</li>
			</ul>

		</div>

		<!--~~~~~ Products ~~~~~-->
		<div
			class="products">
			<div
				class="content-center">

				<h1>
					МЫ ПРЕДЛАГАЕМ
				</h1>

				<ul
					class="products-menu">
                    @foreach (\App\Products::ALL as $index => $product)
                        <li
    						class="products-menu__item">
    						<a style='cursor: pointer'
    							onclick="slider.goTo({{ $index }})"
    							title="Tony Moly"
    							class="products-menu__link">
    							{{ $product['name'] }}
    						</a>
    					</li>
                    @endforeach
				</ul>
				<div
					class="products-slider">

					<div
						class="products-slider__arrow products-slider__arrow_left">
					</div>
					<div
						class="products-slider__arrow products-slider__arrow_right">
					</div>

					<div class="products-slider-wrapper">
                        @foreach (\App\Products::ALL as $product)
                            @include('products/' . $product['view'])
                        @endforeach
					</div>
				</div>

			</div>
		</div>

		<!--~~~~~ How we work ~~~~~-->
		<div
			class="how-we-work">

			<div
				class="content-center">
				<h1>
					КАК МЫ РАБОТАЕМ
				</h1>

				<ul
					class="how-we-work-list">
					<li
						class="how-we-work-list__item">

						<div
							class="how-we-work-list__icon">

							<img
								src="images/icon-how-we-work-1.png"
								alt="Вы делаете заказ"
							/>

							<div
								class="how-we-work-list__number">
								01.
							</div>

						</div>

						<div
							class="how-we-work-list__title">
							Вы делаете заказ
						</div>
						Минимальная партия <br>
						30 000 т.р. Чем больше заказ, тем больше скидка.
					</li>
					<li
						class="how-we-work-list__item">

						<div
							class="how-we-work-list__icon">

							<img
								src="images/icon-how-we-work-2.png"
								alt="Мы формируем заказ"
							/>

							<div
								class="how-we-work-list__number">
								02.
							</div>

						</div>

						<div
							class="how-we-work-list__title">
							Мы формируем заказ
						</div>
						Помогаем вам, учитываем особенности вашего магазина.
					</li>
					<li
						class="how-we-work-list__item">

						<div
							class="how-we-work-list__icon">

							<img
								src="images/icon-how-we-work-3.png"
								alt="Оперативно доставляем ваш заказ"
							/>

							<div
								class="how-we-work-list__number">
								03.
							</div>

						</div>

						<div
							class="how-we-work-list__title">
							Оперативно доставляем ваш заказ
						</div>
						Помогаем вам, учитываем особенности вашего магазина.
					</li>
					<li
						class="how-we-work-list__item">

						<div
							class="how-we-work-list__icon">

							<img
								src="images/icon-how-we-work-4.png"
								alt="Предоставляем все материалы"
							/>

							<div
								class="how-we-work-list__number">
								04.
							</div>

						</div>

						<div
							class="how-we-work-list__title">
							Предоставляем все материалы
						</div>
						Помогаем вам, учитываем особенности вашего магазина.
					</li>
					<li
						class="how-we-work-list__item how-we-work-list__item_last">

						<div
							class="how-we-work-list__icon">

							<div
								class="how-we-work-list__number">
								05.
							</div>

						</div>

						Покупатели довольны качественной и оригинальной косметикой.

						<div
							class="how-we-work-list__title">
							Вы формируете новый заказ.
						</div>
					</li>

				</ul>
			</div>

		</div>

		<!--~~~~~ More Benefits ~~~~~-->
		<div
			class="more-benefits">
			<div
				class="content-center">

				<h1>
					ДОПОЛНИТЕЛЬНОЕ <br>
					ПРЕИМУЩЕСТВО
				</h1>

				<ul
					class="more-benefits-list">

					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							1.
						</div>

						<div
							class="more-benefits-list__title">
							Бесплатная доставка по <br>
							г. Москва от 70 000 тыс. руб.
						</div>
						Или бесплатная доставка до транспортной компании
					</li>
					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							2.
						</div>

						<div
							class="more-benefits-list__title">
							Оплата любым <br>
							удобным способом.
						</div>

						Оплата возможна как наличным, так и безналичным способом.
					</li>
					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							3.
						</div>

						<div
							class="more-benefits-list__title">
							Возврат, если Вас <br>
							не устраивает качество.
						</div>
						Если вы обнаружили брак или не соответствие сроков годности мы без вопросов заменим или сделаем возврат.
					</li>
					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							4.
						</div>

						<div
							class="more-benefits-list__title">
							Новинки каждый квартал
						</div>
						Мы находимся в постоянном поиске интересной и качественной косметики. И обязательно показываем вам результаты.
					</li>
					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							5.
						</div>

						<div
							class="more-benefits-list__title">
							Постоянные скидки и акции.
						</div>
						Мы проводим различные акции и скидки для вас и ваших клиентов.
					</li>
					<li
						class="more-benefits-list__item">

						<div
							class="more-benefits-list__number">
							6.
						</div>

						<div
							class="more-benefits-list__title">
							Регулярные поставки из Кореи.
						</div>

						Регулярные поставки помогают нам поддерживать товарные остатки, чтобы все было в наличии.
					</li>

				</ul>

				<div
					class="text-center">
					<a
						title="Начать работу"
						href="#"
						class="button get-callback-popup">
						Начать работу
					</a>
				</div>

			</div>
		</div>

		<!--~~~~~ Individual approach ~~~~~-->
		<div
			class="individual-approach">
			<div
				class="content-center">

				<h1>
					ИНДИВИДУАЛЬНЫЙ <br>
					ПОДХОД ДЛЯ КАЖДОГО
				</h1>

				<div
					class="individual-approach__wrapper">

					<div
						class="individual-approach__item">
						<h3>
							Только начинаете свой бизнес ?
						</h3>

						<ul
							class="individual-approach-list">
							<li
								class="individual-approach-list__item">
								Поможем в подборе ассортимента.
							</li>
							<li
								class="individual-approach-list__item">
								Индивидуальные условия.
							</li>
							<li
								class="individual-approach-list__item">
								Подробные описание продуктов.
							</li>
							<li
								class="individual-approach-list__item">
								Большие сроки  годности
							</li>
							<li
								class="individual-approach-list__item">
								Проконсультируем по всем вопросам.
							</li>
						</ul>
					</div>
					<div
						class="individual-approach__item">
						<h3>
							Уже занимаетесь <br>
							продажей корейской косметики ?
						</h3>

						<ul
							class="individual-approach-list">
							<li
								class="individual-approach-list__item">
								Конкурентные цены.
							</li>
							<li
								class="individual-approach-list__item">
								Оптимальная минимальная партия.
							</li>
							<li
								class="individual-approach-list__item">
								Широкий ассортимент.
							</li>
							<li
								class="individual-approach-list__item">
								Официальная косметика.
							</li>
							<li
								class="individual-approach-list__item">
								Маркировка по закону.
							</li>
							<li
								class="individual-approach-list__item">
								Быстрая поставка.
							</li>
						</ul>
					</div>
					<div
						class="individual-approach__item">
						<h3>
							Занимаетесь продажей <br>
							косметики и хотите <br>
							расширить ассортимент ?
						</h3>

						<ul
							class="individual-approach-list">
							<li
								class="individual-approach-list__item">
								Подберем бренды, без конфликта с существующими. Сертификаты.
							</li>
							<li
								class="individual-approach-list__item">
								Несколько ценовых сегментов.
							</li>
							<li
								class="individual-approach-list__item">
								Быстрая поставка.
							</li>
							<li
								class="individual-approach-list__item">
								Ходовые позиции.
							</li>
							<li
								class="individual-approach-list__item">
								Консультации.
							</li>
						</ul>
					</div>
					<div
						class="individual-approach__item">
						<h3>
							Торговая сеть и ищете <br>
							ответственного поставщика ?
						</h3>

						<ul
							class="individual-approach-list">
							<li
								class="individual-approach-list__item">
								Особые условия.
							</li>
							<li
								class="individual-approach-list__item">
								Маркетинговые материалы.
							</li>
							<li
								class="individual-approach-list__item">
								Поддержка товарных запасов.
							</li>
							<li
								class="individual-approach-list__item">
								Предоставим все  документы.
							</li>
							<li
								class="individual-approach-list__item">
								Опыт в работе с сетями.
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>

		<!--~~~~~ Order ~~~~~-->
		<div
			class="order">
			<div
				class="order__center">
				<div
					class="order__left-col">

					<div
						class="order-block">
						<div
							class="order-block__title">
							Напишите нам
							<span>
								и мы ответим на все ваши вопросы
							</span>
						</div>
						<form
							class="form-order">
							<div
								class="form-row">
								<input v-model="request.name"
									type="text"
									class="input-text"
									placeholder="Ваше имя"
								/>
							</div>
							<div
								class="form-row">
								<input v-mask="'+7 (###) ###-##-##'"
                                    v-model="request.phone"
									type="text"
									class="input-text"
									placeholder="Телефон"
								/>
							</div>
							<div
								class="form-row">
								<input v-model="request.email"
									type="text"
									class="input-text"
									placeholder="E-mail"
								/>
							</div>
							<div
								class="form-row">
								<input v-model="request.city"
									type="text"
									class="input-text"
									placeholder="Город"
								/>
							</div>
							<div
								class="form-row">
								<input v-model="request.organization"
									type="text"
									class="input-text"
									placeholder="Название организации"
								/>
							</div>
							<div
								class="form-row">
								<input v-model="request.site"
									type="text"
									class="input-text"
									placeholder="Сайт"
								/>
							</div>
							<div
								class="order-footer">
								<input @click="makeRequest('Форма внизу')"
									type="button"
									value="Отправить"
									title="Отправить"
									class="button get-thank-you-popup"
								/>
							</div>
						</form>
					</div>

				</div>
				<div
					class="order__right-col">

					<div
						class="order-title">
						Получить прайс-лист
					</div>

					<div
						class="order-text">
						с подробными условиями и графой заказа.
					</div>

					<a
						href="#"
						title=""
						class="button button_download-xml">
						Получить <br>
						прайс-лист
					</a>

					<div
						class="order-text-under">
						После заполнения отправьте <br>
						его на нашу почту для начала работы
					</div>

					<div
						class="email">
						<a
							href="matilto:info@email.ru">
							info@email.ru
						</a>
					</div>
				</div>
			</div>
		</div>

		<!--~~~~~ Partners ~~~~~-->
		<div
			class="partners">

			<div
				class="content-center">

				<h1>
					Наши партнеры
				</h1>

				<div
					class="sub-title-text">
					Более 200 онлайн и оффлайн магазинов уже работают с нашими брендами
				</div>

				<ul
					class="partners-list">
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
					<li
						class="partners-list__item">
						<a
							href="#">
							<img
								src="pictures/img-2.jpg"
								alt="partners"
							/>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<!--~~~~~ Contacts ~~~~~-->
		<div
			class="contacts">
			<div
				class="contacts__map">
				<img
					src="pictures/map.jpg"
					alt="map"

				/>
			</div>

			<div
				class="content-center">
				<div
					class="contacts-block">

					<div
						class="contacts-block__title">
						Контакты
					</div>

					<ul
						class="contacts-list">
						<li
							class="contacts-list__item contacts-list__item_adress">
							Адрес: г. Краснодар ул. <br>
							Ставропольская, д. 109/2
						</li>
						<li
							class="contacts-list__item contacts-list__item_time">
							с 09:00 до 20:00
						</li>
						<li
							class="contacts-list__item contacts-list__item_phone">
							+7 (495) 456-55-77
						</li>
					</ul>

				</div>
			</div>
		</div>

		<!--~~~~~ Footer ~~~~~-->
		<div
			class="footer-clearfix">
		</div>
		<footer
			class="footer">

			<div
				class="content-center">

				<a
					href="#"
					title="Корейская косметика"
					class="logo">
					Корейская косметика
				</a>

				<div
					class="phone">
					+7 (495) 456-55-77
				</div>

				<a
					title="Обратный звонок"
					style='cursor: pointer'
					class="button button_small get-callback-popup">
					Обратный звонок
				</a>

			</div>

		</footer>
        @include('modals/modals')
	</div>
	<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
