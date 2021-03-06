@extends('layouts.master')

@section('content')
    <nav class="nav">
        <button class="nav__top nav__top--primary grid-container fluid" data-open="onboarding-modal">
            <span class="link-underline">Finaliza tu registro</span>&nbsp;en 4 simples pasos para crear y administrar
            viajes.
        </button>
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


    <header class="header">
        <div class="grid-container header__inner">
            <div class="header__left">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="disabled">Gene Splicing</li>
                    <li>
                        <span class="show-for-sr">Current: </span> Cloning
                    </li>
                </ul>
                <h1 class="heading-1">Styleguide</h1>
            </div>
            <div class="header__right">
                <button class="button button--wide">Secondary action</button>
                <button class="button button--fill button--wide">Primary action</button>
            </div>
        </div>
        <ul class="grid-container header__progress">
            <li><a class="header__progress__step" href="">Carga</a></li>
            <li><a class="header__progress__step" href="">Origen y destino</a></li>
            <li><a class="header__progress__step" href="" disabled>Carga</a></li>
            <li><a class="header__progress__step" href="" disabled>Seguro de viaje</a></li>
        </ul>
    </header>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-6 medium-offset-3">
                <h2 class="heading-2 margin-bottom--20">
                    Typography </h2>
                <div class="fieldset">
                    <div class="panel">
                        <div class="panel__body">
                            <h1 class="heading-1 margin-bottom--20">Heading 1</h1>
                            <h2 class="heading-2 margin-bottom--20">Heading 2</h2>
                            <h3 class="heading-3 margin-bottom--20">Heading 3</h3>
                            <h4 class="heading-4 margin-bottom--20">Heading 4</h4>
                            <h5 class="heading-5 margin-bottom--20">Heading 5</h5>
                            <h6 class="heading-6 margin-bottom--40">Heading 6</h6>
                            <p class="paragraph paragraph--xlarge margin-bottom--20">Paragraph x-large</p>
                            <p class="paragraph paragraph--large margin-bottom--20">Paragraph large</p>
                            <p class="paragraph margin-bottom--20">Paragraph default</p>
                            <p class="paragraph paragraph--small margin-bottom--40">Paragraph small</p>
                            <span class="label margin-bottom--20">Label</span>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2 margin-bottom--20">
                    Icons </h2>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Icon usage and sizes </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <svg class="icon icon--large">
                        <use xlink:href="/img/icon-sprite/icons.svg#icon-wheat"></use>
                    </svg>
                    <svg class="icon">
                        <use xlink:href="/img/icon-sprite/icons.svg#icon-wheat"></use>
                    </svg>
                    <svg class="icon icon--small">
                        <use xlink:href="/img/icon-sprite/icons.svg#icon-wheat"></use>
                    </svg>
                </div>
                <h2 class="heading-2 margin-bottom--50">
                    Buttons </h2>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Outline Buttons </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <button class="button">Default</button>
                        <button class="button button--primary">Primary</button>
                        <button class="button button--alert">Alert</button>
                        <button class="button button--accent">Accent</button>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Fill Buttons </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <button class="button button--fill">Default</button>
                        <button class="button button--fill button--primary">Primary</button>
                        <button class="button button--fill button--alert">Alert</button>
                        <button class="button button--fill button--accent">Accent</button>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Transparent Buttons </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <button class="button button--transparent">Default</button>
                        <button class="button button--transparent button--primary">Primary</button>
                        <button class="button button--transparent button--alert">Alert</button>
                        <button class="button button--transparent button--accent">Accent</button>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Button Sizes </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <button class="button">Default</button>
                        <button class="button button--small">Small</button>
                        <button class="button button--wide">Wide</button>
                        <button class="button button--full">Full</button>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Icon Buttons </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <button class="button button--transparent button--square" aria-label="Editar">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-edit"></use>
                            </svg>
                        </button>

                        <button class="button button--transparent button--square button--alert button--small"
                                aria-label="Borrar">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-close"></use>
                            </svg>
                        </button>

                        <br><br>

                        <button class="button button--transparent button--small">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-edit"></use>
                            </svg>
                            Editar
                        </button>
                        <button class="button button--transparent button--small button--alert">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-close"></use>
                            </svg>
                            Borrar
                        </button>
                    </div>
                </div>
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Text fields </h2>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Regular Fields with labels (in form-group) </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with outline</label>
                        <input type="text" class="input" placeholder="Placeholder">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with fill</label>
                        <input type="text" class="input input--fill" placeholder="Placeholder">
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Input wrapper </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur</p>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with icon left</label>
                        <div class="input-wrapper input-wrapper--icon-left">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-search"></use>
                            </svg>
                            <input type="text" class="input" placeholder="Placeholder">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with icon Right</label>
                        <div class="input-wrapper input-wrapper--icon-right">
                            <input type="text" class="input" placeholder="Placeholder">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-edit"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with button left</label>
                        <div class="input-wrapper input-wrapper--button-left">
                            <button class="button button--transparent button--square button--alert" aria-label="Borrar">
                                <svg class="icon">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-close"></use>
                                </svg>
                            </button>
                            <input type="text" class="input" placeholder="Placeholder">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with button right</label>
                        <div class="input-wrapper input-wrapper--button-right">
                            <input type="text" class="input" placeholder="Placeholder">
                            <button class="button button--transparent button--primary" aria-label="Borrar">
                                Aceptar
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input with combined icon left and button right</label>
                        <div class="input-wrapper input-wrapper--icon-left input-wrapper--button-right">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-search"></use>
                            </svg>
                            <input type="text" class="input" placeholder="Placeholder">
                            <button class="button button--transparent" aria-label="Borrar">
                                Buscar
                            </button>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Forms </h2>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Helper Tooltips (Hover to see) </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Input group with helper tooltip</label>
                        <div class="input-group">
                            <input type="text" class="input" placeholder="e.g. 40">
                            <select type="text" class="input input-select" placeholder="Toneladas">
                                <option value="">Toneladas</option>
                                <option value="">Camiones</option>
                            </select>
                        </div>
                        <div class="form-message-wrapper">
                            <div class="form-message">
                                <svg class="icon">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-info-circle"></use>
                                </svg>
                                <span class="helper-text">
                                    Incluye el peso del empaque.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Invalid fields </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Label</label>
                        <input type="text" class="input" placeholder="Placeholder" invalid>

                        <div class="form-message-wrapper">
                            <div class="form-message form-message--alert">
                                <svg class="icon">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-info-circle"></use>
                                </svg>
                                <span class="helper-text">This field is required.</span>
                            </div>

                            <div class="form-message">
                                <svg class="icon">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-info-circle"></use>
                                </svg>
                                <span class="helper-text">
                                    Incluye el peso del empaque.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Controls </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>
                    <div class="form-group control-group">
                        <h3 class="label control-group__label">Checkboxes</h3>
                        <label class="control">
                            <input class="checkbox" type="checkbox">
                            Checkbox label
                        </label>
                        <label class="control">
                            <input class="checkbox" type="checkbox">
                            Checkbox label
                        </label>
                        <label class="control">
                            <input class="checkbox" type="checkbox">
                            Checkbox label
                        </label>
                    </div>
                    <div class="form-group control-group">
                        <h3 class="label control-group__label">Radio buttons</h3>
                        <label class="control">
                            <input class="radio" name="styleguide-radio" type="radio">
                            Radio button label
                        </label>
                        <label class="control">
                            <input class="radio" name="styleguide-radio" type="radio">
                            Radio button label
                        </label>
                        <label class="control">
                            <input class="radio" name="styleguide-radio" type="radio">
                            Radio button label
                        </label>
                    </div>
                    <div class="form-group control-group">
                        <h3 class="label control-group__label">Switch</h3>
                        <div class="switch">
                            <input class="switch-input" id="exampleSwitch" type="checkbox" name="exampleSwitch">
                            <label class="switch-paddle" for="exampleSwitch">
                                <span class="show-for-sr">Download Kittens</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Sliders </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>
                    <div class="form-group">
                        <div class="slider" data-slider data-initial-start="25" data-initial-end="75">
                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1" >
                                <label class="slider-handle-value">
                                    <span>Desde</span>
                                    <input type="text" readonly>
                                </label>
                            </span>
                            <span class="slider-fill" data-slider-fill></span>
                            <span class="slider-handle" data-slider-handle role="slider" tabindex="1">
                                <label class="slider-handle-value">
                                    <span>Hasta</span>
                                    <input type="text" readonly>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Tiles </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>
                    <div class="tile-group form-group">
                        <button class="tile" aria-selected="false">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-trailer-box"></use>
                            </svg>
                            <span class="tile__label">
                                    Caja
                                </span>
                        </button>

                        <button class="tile" aria-selected="true">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-trailer-dry-box"></use>
                            </svg>
                            <span class="tile__label">
                                    Caja Seca
                                </span>
                        </button>

                        <button class="tile" aria-selected="false">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-trailer-cage"></use>
                            </svg>
                            <span class="tile__label">
                                    Jaula
                                </span>
                        </button>

                        <button class="tile" aria-selected="false">
                            <svg class="icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-trailer-container"></use>
                            </svg>
                            <span class="tile__label">
                                    Portacontenedor
                                </span>
                        </button>
                    </div>
                </div>
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Panels </h2>
                <div class="fieldset">
                    <div class="grid-x grid-margin-x margin-bottom--30">
                        <div class="cell medium-6">
                            <div class="panel">
                                <div class="panel__body">
                                    <h6 class="heading-6 margin-bottom--10">
                                        Static panel </h6>
                                    <p class="text-alpha--50">Lorem ipsum dolor sit amet consectetur adipiscing enim ad
                                        lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="cell medium-6">
                            <button class="panel panel-interactive">
                                <span class="panel__body">
                                    <h6 class="heading-6 margin-bottom--10">
                                        Interactive Panel </h6>
                                    <p class="text-alpha--50">Hover and click me!</p>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Modals </h2>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Regular modals </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>

                    <button data-open="exampleModal1" class="button button--wide">
                        Click me for a regular modal
                    </button>
                </div>
                <div class="fieldset">
                    <div class="fieldset__header">
                        <h2 class="heading-5">
                            Fullscreen modals </h2>
                        <p class="fieldset__description paragraph text-alpha--50">Lorem ipsum dolor sit amet
                            consectetur </p>
                    </div>

                    <button data-open="onboarding-modal" class="button button--wide button--fill button--primary">
                        Click me for a fullscreen modal
                    </button>
                </div>
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Tables </h2>
            </div>

            <div class="cell medium-9 medium-offset-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            <button class="table__sort">
                                Estado
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                        <th>
                            <button class="table__sort">
                                Origen
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                        <th>
                            <button class="table__sort table__sort--active">
                                Fecha de carga
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                        <th></th>
                        <th>
                            <button class="table__sort">
                                Destino
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                        <th>
                            <button class="table__sort">
                                Fecha de descarga
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                        <th class="cell--align-right">
                            <button class="table__sort">
                                Tarifa
                                <svg class="icon icon--small">
                                    <use xlink:href="/img/icon-sprite/icons.svg#icon-sort"></use>
                                </svg>
                            </button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="badge">Cotizado</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge badge--primary">Publicado</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge badge--alert">Cancelado</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge">Cotizado</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge badge--accent">En camino</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge badge--primary">Publicado</span></td>
                        <td>
                            <p>Guadalajara</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">Jalisco</p>
                        </td>
                        <td>
                            <svg class="icon cell__arrow-icon">
                                <use xlink:href="/img/icon-sprite/icons.svg#icon-arrow-right"></use>
                            </svg>
                        </td>
                        <td>
                            <p>Ciudad de México</p>
                            <p class="cell__text--secondary">Distrito Federal</p>
                        </td>
                        <td>
                            <p>12-Nov-2018</p>
                            <p class="cell__text--secondary">12 AM – 8 PM</p>
                        </td>
                        <td class="cell--align-right">
                            <p class="cell__text--bold">
                                $ 100,000 </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="cell medium-12">
                <h2 class="heading-2 margin-top--130 margin-bottom--50">
                    Sticky Sidenav and Placeholders </h2>
            </div>
            <div class="cell medium-3">
                <ul class="menu--sidenav menu--vertical menu">
                    <li><a class="menu-item menu-item--large active">Mi cuenta</a></li>
                    <li><a class="menu-item menu-item--large">Documentos</a></li>
                    <li><a class="menu-item menu-item--large">Pago</a></li>
                    <li><a class="menu-item menu-item--large">Ubicaciones registradas</a></li>
                    <li><a class="menu-item menu-item--large">Notificaciones</a></li>
                    <li><a class="menu-item menu-item--large">Términos y servicios</a></li>
                </ul>
            </div>
            <div class="cell medium-7 medium-offset-1">
                <div class="placeholder placeholder--height-1000">
                    <div class="placeholder__description">
                        Aquí podrás ver todos tus viajes.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="reveal tiny" id="exampleModal1" data-reveal data-animation-in="reveal-slide-in"
         data-animation-out="reveal-slide-out">
        <button class="close-button button button--transparent button--small button--square" data-close
                aria-label="Close modal">
            <svg class="icon">
                <use xlink:href="/img/icon-sprite/icons.svg#icon-close"></use>
            </svg>
        </button>
        <div class="reveal__header">
            <h2 class="heading-5">Ingresa tu contraseña</h2>
        </div>
        <div class="reveal__body">
            <p>Por favor verifica que eres realmente tú.<br>Ingresa tu contraseña para poder continuar.</p>
            <input type="text" placeholder="Input" class="input">
        </div>
        <div class="reveal__actions">
            <button class="button" data-close>Cancel</button>
            <button class="button button--fill button--primary">Continuar</button>
        </div>
    </div>

    <div class="reveal full onboarding onboarding--primary" id="onboarding-modal" data-reveal
         data-animation-in="reveal-full-zoom-in" data-animation-out="reveal-full-zoom-out">
        <a href="" class="onboarding__logo logo logo--black">
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
        <button class="close-button button button--transparent button--square" data-close aria-label="Close modal">
            <svg class="icon icon--large">
                <use xlink:href="/img/icon-sprite/icons.svg#icon-close"></use>
            </svg>
        </button>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell medium-6 medium-offset-3">
                    <div class="reveal__header onboarding__header">
                        <h1 class="heading-1 margin-bottom--40">
                            Comienza con fletex en 4 simples pasos. </h1>
                        <h2 class="heading-6 margin-bottom--10">
                            Lorem ipsum dolor </h2>
                        <p class="paragraph">
                            Mientras finalizas tu registro, ya puedes echar un vistazo a la plataforma y ver lo que
                            tiene para ofrecer. </p>
                    </div>
                    <div class="reveal__body onboarding__body">
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-6">
                                <a href="" class="onboarding__step">
                                    <span class="onboarding__step__number">1</span>
                                    <span class="onboarding__step__title heading-5">Confirma tu correo electrónico</span>
                                    <span class="onboarding__step__description paragraph">Te envíamos un correo electrónico con un enlace para verificar tu correo. </span>
                                </a>
                            </div>
                            <div class="cell small-6">
                                <a href="" class="onboarding__step">
                                    <span class="onboarding__step__number">2</span>
                                    <span class="onboarding__step__title heading-5">Confirma tu correo electrónico</span>
                                    <span class="onboarding__step__description paragraph">Te envíamos un correo electrónico con un enlace para verificar tu correo. </span>
                                </a>
                            </div>
                            <div class="cell small-6">
                                <a href="" class="onboarding__step">
                                    <span class="onboarding__step__number">3</span>
                                    <span class="onboarding__step__title heading-5">Confirma tu correo electrónico</span>
                                    <span class="onboarding__step__description paragraph">Te envíamos un correo electrónico con un enlace para verificar tu correo. </span>
                                </a>
                            </div>
                            <div class="cell small-6">
                                <a href="" class="onboarding__step">
                                    <span class="onboarding__step__number">4</span>
                                    <span class="onboarding__step__title heading-5">Confirma tu correo electrónico</span>
                                    <span class="onboarding__step__description paragraph">Te envíamos un correo electrónico con un enlace para verificar tu correo. </span>
                                </a>
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

        $('.menu--sidenav li a').click(function () {
          $('.menu--sidenav li a').removeClass('active')
          $(this).addClass('active')
        })

        $('.nav__notifications').click(function () {
          $(this).toggleClass('nav__notifications--highlight')
        })

        $('.tile').click(function () {
          $('.tile').attr('aria-selected', 'false')
          if ($(this).attr('aria-selected') === 'true') {
            $(this).attr('aria-selected', 'false')
          } else {
            $(this).attr('aria-selected', 'true')
          }
        })
      })
    </script>
@endsection
