@extends('layouts.master')

@section('content')
    <nav class="nav nav--scrolled">
        <div class="nav__main grid-container fluid">
            <a href="" class="nav__logo logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 252 83"
                     preserveAspectRatio="xMinYMid">
                    <defs>
                        <path id="logo-mask-path" d="M38.3,0C22.4,0,4.2,6.1,3.4,6.3L0.6,7.3l-0.2,3c0,0.4-0.8,10.2,0,16.3L1,32.1l5.2-1.9
			c0.1,0,7.2-2.5,18.6-3.6c9.8-0.9,24.6-0.8,41.3,4.2c-0.3,2-0.8,4.7-1.7,7.7c-6.1-1.7-18-4.6-28.4-4.8C20,33.5,7.9,37.5,7.4,37.6
			L3,39.1l1.6,4.3c2.1,5.7,5.5,12.1,7.8,15.8l1.9,3.2l3.5-1.3c0.1,0,9.3-3.4,19.8-2.6c5.8,0.4,10.8,1.6,14.4,2.6
			c-5.2,5.9-10.9,9.8-13.8,11.7c-2.9-1.7-8.3-5.5-11.7-9.7c0,0-2.3,0.1-4.8,0.9c-2.8,0.9-4.7,2-4.7,2c5.9,8.3,18.9,15.7,19.3,15.9
			l2,1l2-1c0.5-0.3,13.6-7,22.9-20.5l3.1-4.6l-5.1-2.1c-0.4-0.2-10.1-4.1-22.9-5.1c-8.2-0.6-15.7,0.9-20,2c-1.1-2-2.3-4.4-3.4-6.7
			c4.6-1,12.2-2.4,21.1-2.2c13.2,0.2,29.8,5.5,30,5.6l4,1.3l1.5-3.9c3.6-9.2,4-17.5,4-17.8l0.1-3.3l-3.2-1.1
			c-28.6-9.6-52.9-5.8-63.5-3.3c0-2.2,0.1-4.5,0.1-6.2c5.6-1.6,19.2-5.4,30-4.9c18.5,0.7,37,7.1,37,7.1c0.2-1.7,0.3-3.2,0.3-4.6
			v-0.2c0-2.3-0.2-3.8-0.2-3.8l-2.7-1C72.8,6.1,56.5,0,38.3,0z"/>
                    </defs>
                    <polygon class="letter" points="105,20.9 105,63 112.8,63 112.8,45.8 125.9,45.8 125.9,38.5 112.8,38.5 112.8,28.2
		126.5,28.2 126.5,20.9 "/>
                    <polygon class="letter" points="129.2,63 136.8,63 136.8,20.9 129.2,20.9 "/>
                    <path class="letter" id="Fill-3" d="M164,44.5c-0.9-5.1-4.8-7.4-8.6-7.4c-2.8,0-7.5,1.5-9,7.4H164z M146.7,50.6c0.3,2,3.3,6.5,8.7,6.5
		c3.4,0,5.9-1.4,7.3-4h8c-1.8,5.7-7.9,11-15.3,11c-9.4,0-16.7-7.5-16.7-16.7c0-8.9,6.9-17.1,16.7-17.1c10.1,0,16.4,8.6,16.4,16.6
		c0,1.5-0.2,2.8-0.5,3.8H146.7z"/>
                    <polygon class="letter" points="175.6,38.1 171.9,38.1 171.9,31.4 175.6,31.4 175.6,20.9 183.2,20.9 183.2,31.4
		187.8,31.4 187.8,38.1 183.2,38.1 183.2,63 175.6,63 "/>
                    <path class="letter" d="M212.1,44.7c-0.8-5.1-4.7-7.5-8.4-7.5c-2.8-0.1-7.6,1.4-9.1,7.2L212.1,44.7z M194.7,50.4
		c0.3,2.1,3.2,6.5,8.6,6.6c3.4,0.1,5.9-1.3,7.4-3.9l8,0.2c-1.9,5.6-8.1,10.8-15.5,10.7c-9.4-0.2-16.6-7.8-16.4-17
		c0.2-8.9,7.2-17,17-16.8c10.1,0.2,16.2,8.9,16.1,16.9c0,1.5-0.3,2.8-0.5,3.8L194.7,50.4z"/>
                    <polygon class="letter" points="230.1,46.7 220.3,31.4 228.8,31.4 234.7,40.9 240.4,31.4 248.9,31.4 239.1,46.7 250.5,63
	241.5,63 234.7,52.2 227.9,63 218.9,63 "/>
                    <clipPath id="logo-mask">
                        <use xlink:href="#logo-mask-path" style="overflow:visible;"/>
                    </clipPath>
                    <path class="logo-path" d="M23.5,66.8c2.2,2.8,8.1,6.8,14.7,10.9c7.1-3.7,17.7-13.9,21.3-19c-12.7-5.5-30-6.9-43.6-2
		c-3.3-5.3-5.5-10.2-7.4-15.2c20-5.8,40.2-2.9,58.8,2.5c2.3-5.9,3.1-9.3,4.1-16.6c-23.1-6.9-41.2-8.1-66.6-1.3
		c-0.6-3.9-1-9.9-0.9-15.3c21.9-8.4,41.4-8.9,68.9-0.9"/>
                </svg>
            </a>
            <ul class="nav__menu">
                <li><a class="nav__menu-item active" href=""><span>Dashboard</span></a></li>
                <li><a class="nav__menu-item" href=""><span>Viajes</span></a></li>
                <li><a class="nav__menu-item" href=""><span>Balance</span></a></li>
            </ul>
            <ul class="nav__actions">
                <li>
                    <button class="button button--transparent button--square">
                        <svg class="icon icon--large">
                            <use xlink:href="/img/icon-sprite/icons.svg#icon-info-circle"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="button button--transparent button--square nav__notifications nav__notifications--highlight">
                        <svg class="icon icon--large">
                            <use xlink:href="/img/icon-sprite/icons.svg#icon-bell"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="button button--transparent nav__profile" data-toggle="nav__profile__dropdown">
                        <img src="/img/dev/profile-pic-client.jpg" alt="" class="nav__profile__avatar avatar">
                        <span class="nav__profile__label">Salvador Muñoz</span>
                    </button>
                    <div class="dropdown-pane" data-position="bottom" data-alignment="right" id="nav__profile__dropdown"
                         data-dropdown>
                        <div class="nav__profile__user-info">
                            <img src="/img/dev/profile-pic-client.jpg" alt="" class="avatar avatar--large">
                            <div class="nav__profile__user-info__name">
                                <p>Salvardor Muñoz</p>
                                <p class="paragraph--small text-alpha--50">salvador.muñoz@gmail.com</p>
                            </div>
                        </div>
                        <ul class="menu menu--vertical">
                            <li>
                                <a class="menu-item" href="">
                                    <svg class="icon">
                                        <use xlink:href="/img/icon-sprite/icons.svg#icon-cog"></use>
                                    </svg>
                                    Configuración
                                </a>
                            </li>
                            <li>
                                <a class="menu-item menu-item--alert" href="">
                                    <svg class="icon">
                                        <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-left"></use>
                                    </svg>
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="shipment shipment--pending">

        <header class="shipment__map">
            <div class="grid-container">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="disabled">Gene Splicing</li>
                    <li>
                        <span class="show-for-sr">Current: </span> Cloning
                    </li>
                </ul>
            </div>
        </header>

        <div class="shipment__body">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell large-8">

                        <div class="shipment-panel shipment-route">
                            <div class="shipment-route__origin">
                                <div class="shipment-route__top">
                                    <h2 class="heading-6">Punto de origen</h2>
                                    <div class="shipment-route__detail">
                                        <div class="shipment__icon">
                                            <svg class="icon icon--large">
                                                <use xlink:href="/img/icon-sprite/icons.svg#icon-pick-up"></use>
                                            </svg>
                                        </div>
                                        <div class="shipment-route__detail__content">
                                            <h3 class="paragraph">9422 Earnestine Prairie</h3>
                                            <h4 class="paragraph text-alpha--50">C.P. 44140, Guadalajara</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="shipment-route__bottom">
                                    <h5 class="paragraph text-alpha--50">October 12, 2018 05:00 AM – 10:00 AM</h5>
                                </div>
                            </div>
                            <div class="shipment-route__destination">
                                <div class="shipment-route__top">
                                    <h2 class="heading-6">Punto de destino</h2>
                                    <div class="shipment-route__detail">
                                        <div class="shipment__icon">
                                            <svg class="icon icon--large">
                                                <use xlink:href="/img/icon-sprite/icons.svg#icon-dropoff"></use>
                                            </svg>
                                        </div>
                                        <div class="shipment-route__detail__content">
                                            <h3 class="paragraph">9422 Earnestine Prairie</h3>
                                            <h4 class="paragraph text-alpha--50">C.P. 44140, Guadalajara</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="shipment-route__bottom">
                                    <h5 class="paragraph text-alpha--50">October 12, 2018 05:00 AM – 10:00 AM</h5>
                                </div>
                            </div>
                        </div>

                        <div class="shipment-panel shipment-cargo">
                            <div class="shipment-cargo__field">
                                <h2 class="heading-6">Tipo de carga</h2>
                                <div class="shipment-cargo__detail">
                                    <div class="shipment__icon shipment__icon--default">
                                        <svg class="icon icon--large">
                                            <use xlink:href="/img/icon-sprite/icons.svg#icon-icon-wheat"></use>
                                        </svg>
                                    </div>
                                    <p class="paragraph">Trigo</p>
                                </div>
                            </div>
                            <div class="shipment-cargo__field">
                                <h2 class="heading-6">Presentación de carga</h2>
                                <div class="shipment-cargo__detail">
                                    <div class="shipment__icon shipment__icon--default">
                                        <svg class="icon icon--large">
                                            <use xlink:href="/img/icon-sprite/icons.svg#icon-heap"></use>
                                        </svg>
                                    </div>
                                    <p class="paragraph">Grano</p>
                                </div>
                            </div>
                            <div class="shipment-cargo__field">
                                <h2 class="heading-6">Peso de carga</h2>
                                <div class="shipment-cargo__detail">
                                    <div class="shipment__icon shipment__icon--default">
                                        <svg class="icon icon--large">
                                            <use xlink:href="/img/icon-sprite/icons.svg#icon-weight"></use>
                                        </svg>
                                    </div>
                                    <p class="paragraph">20 T</p>
                                </div>
                            </div>
                            <div class="shipment-cargo__field">
                                <h2 class="heading-6">Tipo de camión</h2>
                                <div class="shipment-cargo__detail">
                                    <div class="shipment__icon shipment__icon--default">
                                        <svg class="icon icon--large icon--truck">
                                            <use xlink:href="/img/icon-sprite/icons.svg#icon-trailer-box"></use>
                                        </svg>
                                    </div>
                                    <p class="paragraph">Caja</p>
                                </div>
                            </div>
                        </div>

                        <div class="shipment-panel shipment-operator">
                            <div class="shipment-operator__field">
                                <h2 class="heading-6">Operador</h2>
                                <div class="shipment-operator__detail shipment-operator__loading">
                                    <div class="avatar-loader">
                                        <div class="avatar-loader__inner">
                                            <svg version="1.1" class="avatar-loader__item avatar-loader__item-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" >
                                                <g class="head">
                                                    <polygon class="face" points="21,25 21,32 15,32 15,12 26,12 26,25"></polygon>
                                                    <polygon class="hat" points="15,13 15,8 25,8 25,11 29,11 29,13"></polygon>
                                                </g>
                                                <path class="body" d="M10.9,30h18.2c2.9,0,5.3,2,5.9,4.8l1,5.2H4l1-5.2C5.6,32,8.1,30,10.9,30z"></path>
                                            </svg>
                                            <svg version="1.1" class="avatar-loader__item avatar-loader__item-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                                <g class="head">
                                                    <polygon class="face" points="21,25 21,32 15,32 15,10 26,10 26,25"></polygon>
                                                    <rect class="hair" x="15" y="12" width="3" height="9"></rect>
                                                    <rect class="beard" x="22" y="19" width="5" height="2"></rect>
                                                </g>
                                                <g class="body-outer">
                                                    <path class="body" d="M10.9,30h18.2c2.9,0,5.3,2,5.9,4.8l1,5.2H4l1-5.2C5.6,32,8.1,30,10.9,30z"></path>
                                                    <rect class="body-accessory" x="11" y="30" width="3" height="10"></rect>
                                                    <rect class="body-accessory" x="25" y="30" width="3" height="10"></rect>
                                                </g>
                                            </svg>
                                            <svg version="1.1" class="avatar-loader__item avatar-loader__item-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                                <g class="head">
                                                    <polygon class="face" points="21,25 21,32 15,32 15,12 26,12 26,25"></polygon>
                                                    <path class="hair" d="M12,26v-9c0-3,2.2-5.5,5.1-5.9C17.5,9.3,19.1,8,21,8h5v4h-8v10c0,3.3-2.7,6-6,6h-2v-2H12z"></path>
                                                </g>
                                                <path class="body" d="M10.9,30h18.2c2.9,0,5.3,2,5.9,4.8l1,5.2H4l1-5.2C5.6,32,8.1,30,10.9,30z"></path>
                                            </svg>
                                            <svg version="1.1" class="avatar-loader__item avatar-loader__item-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                                <g class="head">
                                                    <polygon class="face" points="24,26 24,32 15,32 15,12 27,12 27,26"></polygon>
                                                    <polygon class="glasses" points="25,18 23,18 23,19 19,19 19,18 14,18 14,16 19,16 19,15 23,15 23,16 25,16 25,15 29,15 29,19 25,19"></polygon>
                                                </g>
                                                <path class="body" d="M9.9,30h21.2c2.9,0,5.3,2,5.9,4.8l1,5.2H3l1-5.2C4.6,32,7.1,30,9.9,30z"></path>
                                            </svg>
                                            <svg version="1.1" class="avatar-loader__item avatar-loader__item-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                                <g class="head">
                                                    <polygon class="face" points="21,25 21,32 15,32 15,12 26,12 26,25"></polygon>
                                                    <polygon class="hat" points="15,13 15,8 25,8 25,11 29,11 29,13"></polygon>
                                                </g>
                                                <path class="body" d="M10.9,30h18.2c2.9,0,5.3,2,5.9,4.8l1,5.2H4l1-5.2C5.6,32,8.1,30,10.9,30z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                        <p class="paragraph">Buscando operador...</p>
                                </div>
                            </div>
                        </div>

                        <div class="shipment-panel shipment-operator">
                            <div class="shipment-operator__field">
                                <h2 class="heading-6">Operador</h2>
                                <div class="shipment-operator__detail">
                                    <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar avatar--large">
                                    <div class="shipment-operator__detail__content">
                                        <p class="paragraph">Emanuel Mariano</p>
                                        <p class="paragraph text-alpha--50">42 años</p>
                                    </div>
                                </div>
                            </div>
                            <div class="shipment-operator__field">
                                <h2 class="heading-6">Camión</h2>
                                <div class="shipment-operator__detail">
                                    <div class="shipment-operator__detail__content">
                                        <p class="paragraph">
                                            Kenworth KW45
                                            <span class="shipment-operator__license-plate badge">JN8890</span>
                                        </p>
                                        <p class="paragraph text-alpha--50">Adicional</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shipment-panel shipment-history">
                            <h2 class="heading-6">Actividad</h2>
                            <ul class="shipment-history__items">
                                <li class="shipment-history__item">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Salvador Muñoz cotizó el viaje</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Salvador Muñoz publicó el viaje</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Se asignó un operador</p>
                                            <p class="paragraph text-alpha--50">Emanuel Mariano</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Emanuel hizo la revisón de carga</p>
                                            <p class="paragraph text-alpha--50">Comentario opcional comentario opcional comentario opcional comentario opcional</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item en-route">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Eduardo Mariano inició el viaje</p>
                                            <p class="paragraph text-alpha--50">Guadalajara, Jal.</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item en-route alert">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Eduardo Mariano reportó una incidencia</p>
                                            <p class="paragraph text-alpha--50">Avería de neumáticos</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="shipment-history__item">
                                    <div class="shipment-history__item__status">
                                        <span class="shipment-history__item__status__dot"></span>
                                    </div>
                                    <div class="shipment-history__item__content">
                                        <div class="shipment-history__item__description">
                                            <p class="paragraph">Eduardo Mariano terminó el viaje</p>
                                            <p class="paragraph text-alpha--50">Aguascalientes, Agu.</p>
                                        </div>
                                        <div class="shipment-history__item__date">
                                            <img src="/img/dev/profile-pic-operator.jpg" alt="" class="avatar">
                                            <p class="paragraph text-alpha--50">Oct 09, 2018 11:00 AM</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="cell large-4">
                        <div class="shipment-summary">
                            <div class="shipment-summary__head">
                                <div class="shipment-summary__status">
                                    <h1 class="heading-5 shipment-summary__head__title">Cotizado</h1>
                                    <p class="paragraph">La tarifa de su envío se ha establecido.</p>
                                </div>
                                <dl class="shipment-summary__fare">
                                    <div class="shipment-summary__fare__item">
                                        <dt>Tarifa del viaje</dt>
                                        <dd>$100,000</dd>
                                    </div>
                                    <div class="shipment-summary__fare__item">
                                        <dt>Seguro de carga</dt>
                                        <dd>$5,000</dd>
                                    </div>
                                    <div class="shipment-summary__fare__item">
                                        <dt>Total</dt>
                                        <dd class="shipment-summary__fare__total">
                                            <span class="shipment-summary__fare__total__unit">$</span>
                                            105,000
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                            <dl class="shipment-summary__panel shipment-summary__list">
                                <div class="shipment-summary__list__item">
                                    <dt>Estado del viaje</dt>
                                    <dd><span class="badge">Pendiente</span></dd>
                                </div>
                                <div class="shipment-summary__list__item">
                                    <dt>Referencia del viaje</dt>
                                    <dd>#123122</dd>
                                </div>
                                <div class="shipment-summary__list__item">
                                    <dt>Seguro de carga</dt>
                                    <dd>
                                    <span class="shipment__icon shipment__icon--default shipment__icon--small">
                                        <svg class="icon">
                                            <use xlink:href="/img/icon-sprite/icons.svg#icon-check-small"></use>
                                        </svg>
                                    </span>
                                    </dd>
                                </div>
                            </dl>
                            <div class="shipment-summary__panel shipment-summary__setting">
                                <div class="shipment-summary__setting__text">
                                    <h3 class="paragraph text--demi margin-bottom--10">Tarifa dinámica</h3>
                                    <p class="paragraph">Aceptar aumento de tarifa en caso de lorem ipsum. <a
                                                class="link-underline" href="">Leer más.</a></p>
                                </div>
                                <div class="shipment-summary__setting__control">
                                    <div class="switch">
                                        <input class="switch-input" id="switch-tarifa-dinamica" type="checkbox"
                                               name="exampleSwitch">
                                        <label class="switch-paddle" for="switch-tarifa-dinamica">
                                            <span class="show-for-sr">Aceptar tarifa dinámica</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="shipment-summary__actions">
                                <button class="button button--full button--fill">Publicar viaje</button>
                                <button class="button button--full">Cancelar viaje</button>
                            </div>
                            <div class="shipment-summary__footer">
                                <p class="paragraph paragraph--small">
                                    Puedes cancelar el viaje sin ninguna penalización en las primeras 24 hores después de que recibas la cotización, siempre y cuando este no haya sido tomado. </p>
                                <svg class="icon icon--large">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-info-circle"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__help">
            <div class="grid-container">
                <p class="footer__help__paragraph paragraph--xlarge">¿Necesitas ayuda para crear un viaje o tienes<br>
                    alguna duda sobre nuestra plataforma?<br>
                    <a class="link-underline" href="">Contáctanos</a> o visita nuestro <a class="link-underline"
                                                                                          href="">servicio de
                        asistencia</a>. </p>
            </div>
        </div>
        <div class="footer__legal">
            <div class="grid-container footer__legal__inner">
                <p class="footer__legal__left">
                    © 2018 SLI - Soluciones Logísticas Inteligentes </p>
                <div class="footer__legal__center">
                    <a href="" class="footer__logo logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 76.3 82.9" preserveAspectRatio="xMinYMid">
                            <defs>
                                <path id="logo-mask-path" d="M38.3,0C22.4,0,4.2,6.1,3.4,6.3l-2.8,1l-0.2,3c0,0.4-0.8,10.2,0,16.3L1,32.1l5.2-1.9
				c0.1,0,7.2-2.5,18.6-3.6c9.8-0.9,24.6-0.8,41.3,4.2c-0.3,2-0.8,4.7-1.7,7.7c-6.1-1.7-18-4.6-28.4-4.8c-16-0.2-28.1,3.8-28.6,3.9
				L3,39.1l1.6,4.3c2.1,5.7,5.5,12.1,7.8,15.8l1.9,3.2l3.5-1.3c0.1,0,9.3-3.4,19.8-2.6c5.8,0.4,10.8,1.6,14.4,2.6
				c-5.2,5.9-10.9,9.8-13.8,11.7c-2.9-1.7-8.3-5.5-11.7-9.7c0,0-2.3,0.1-4.8,0.9c-2.8,0.9-4.7,2-4.7,2c5.9,8.3,18.9,15.7,19.3,15.9
				l2,1l2-1c0.5-0.3,13.6-7,22.9-20.5l3.1-4.6l-5.1-2.1c-0.4-0.2-10.1-4.1-22.9-5.1c-8.2-0.6-15.7,0.9-20,2c-1.1-2-2.3-4.4-3.4-6.7
				c4.6-1,12.2-2.4,21.1-2.2c13.2,0.2,29.8,5.5,30,5.6l4,1.3l1.5-3.9c3.6-9.2,4-17.5,4-17.8l0.1-3.3l-3.2-1.1
				c-28.6-9.6-52.9-5.8-63.5-3.3C8.9,18,9,15.7,9,14c5.6-1.6,19.2-5.4,30-4.9c18.5,0.7,37,7.1,37,7.1c0.2-1.7,0.3-3.2,0.3-4.6v-0.2
				c0-2.3-0.2-3.8-0.2-3.8l-2.7-1C72.8,6.1,56.5,0,38.3,0z"/>
                            </defs>
                            <clipPath id="logo-mask">
                                <use xlink:href="#logo-mask-path" style="overflow:visible;"/>
                            </clipPath>
                            <path class="logo-path" d="M23.5,66.8c2.2,2.8,8.1,6.8,14.7,10.9c7.1-3.7,17.7-13.9,21.3-19c-12.7-5.5-30-6.9-43.6-2
			c-3.3-5.3-5.5-10.2-7.4-15.2c20-5.8,40.2-2.9,58.8,2.5c2.3-5.9,3.1-9.3,4.1-16.6c-23.1-6.9-41.2-8.1-66.6-1.3
			c-0.6-3.9-1-9.9-0.9-15.3c21.9-8.4,41.4-8.9,68.9-0.9"/>
                        </svg>
                    </a>
                </div>
                <div class="footer__legal__right">
                    <a href="">Aviso de privacidad</a>
                    <a href="">Términos y servicios</a>
                    <a href="">Contacto</a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/js/foundation.min.js"></script>
    <script>
      $(document).foundation();

      $(document).ready(function () {
        const classes = ['shipment--pending', 'shipment--published', 'shipment--en-route', 'shipment--finished', 'shipment--cancelled']
        const wrapper = $('.shipment')
        let nextClass = 0

        function switchClass() {
          const currentClass = wrapper.attr('class').replace('shipment ', '')
          const currentIndex = classes.indexOf(currentClass)

          if (currentIndex === classes.length - 1) {
            nextClass = 0
          } else {
            nextClass = currentIndex + 1
          }

          wrapper.removeClass(currentClass)
          wrapper.addClass(classes[nextClass])
        }

        $('.shipment-summary__head').click(switchClass)
      })
    </script>
@endsection

