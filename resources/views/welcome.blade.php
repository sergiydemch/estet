<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--<title>Laravel</title>--}}
        {{--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>--}}
        {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>--}}
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/slick-theme.css">
        <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="">
        <div class="page-wrap">
            <div class="itg-header">
                <div class="itg-top-line-wrap container-fluid padding-0">
                    <div class="container">
                        <div class="row">
                            <div class="topline-right col-md-6 col-sm-6 text-left">
                                <ul class="itg-ul-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Карта сайта</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="topline-left cart-line col-md-6 col-sm-6 text-right">
                                <div class="itg-cart-block">
                                    <div class="inline-block">
                                        <p>Список желаний :</p>
                                    </div>
                                    <div class="inline-block">
                                        <ul>
                                            <li><a href="#">Первое</a></li>
                                            <li><a href="#">Второе</a></li>
                                            <li><a href="#">Третье</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itg-logo-line container-fluid padding-0">
                    <div class="container">
                       <div class="row">
                           <div class="col-md-3 itg-logo col-xs-12 col-sm-6">
                               <img src="/img/logo.png" alt="" class="site-logo">
                           </div>
                           <div class="col-md-4 itg-search text-center col-xs-12 col-sm-6">
                               <div class="popular-requests">
                                   <h4>Популярные запросы:</h4>
                                   <ul>
                                       <li><a href="#">Лепнина</a></li>
                                       <li><a href="#">Гиппс</a></li>
                                       <li><a href="#">Полиуритан</a></li>
                                   </ul>
                               </div>
                               <input type=search placeholder="Поиск">
                               <input type="submit" class="hidden"><i aria-hidden="true" class="fa fa-search"><span>fa</span></i>
                           </div>
                           <div class="col-md-2 itg-modal col-xs-12 col-sm-6">
                               <button type="default-button-site" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Обратный звонок</button>
                           </div>
                           <div class="col-md-3 itg-phones text-right col-xs-12 col-sm-6">
                               <div class="phones-inner">
                                   <p><i aria-hidden="true" class="fa fa-phone"><span>fa</span></i><a href="tel:+38 (044)2095051">+38 (044)209-50-51</a></p>
                                   <p><i aria-hidden="true" class="fa fa-phone"><span>fa</span></i><a href="tel:+38 (067)4669608">+38 (067)466-96-08</a></p>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="itg-category-menu container-fluid padding-0">
                    <div class="container">
                        <div class="row">
                            <ul class="menu nav">
                                <li class="expanded dropdown">
                                    <a href="" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Гипсовая лепнина<span class="caret"></span></a>
                                    <ul class="menu dropdown-menu">
                                        <li>
                                            <a href="">Декоративные камины</a>
                                        </li>
                                        <li>
                                            <a href="">Капители</a>
                                        </li>
                                        <li>
                                            <a href="">Карнизы гладкие</a>
                                        </li>
                                        <li>
                                            <a href="">Карнизы с орнаментом</a>
                                        </li>
                                        <li>
                                            <a href="">Колонны</a>
                                        </li>
                                        <li>
                                            <a href="">Консоли и кронштейны</a>
                                        </li>
                                        <li>
                                            <a href="">Купола</a>
                                        </li>
                                        <li>
                                            <a href="">Молдинги</a>
                                        </li>
                                        <li>
                                            <a href="">Молдинги</a>
                                        </li>
                                        <li>
                                            <a href="">Ниши</a>
                                        </li>
                                        <li>
                                            <a href="">Обрамление дверных проемов</a>
                                        </li>
                                        <li>
                                            <a href="">Орнаменты</a>
                                        </li>
                                        <li>
                                            <a href="">Панно</a>
                                        </li>
                                        <li>
                                            <a href="">Пилястры</a>
                                        </li>
                                        <li>
                                            <a href="">Плиты</a>
                                        </li>
                                        <li>
                                            <a href="">Потолочные розетки</a>
                                        </li>
                                        <li>
                                            <a href="">Скульптуры и статуи</a>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="">Декоративные балки</a>
                                </li>
                                <li class="expanded dropdown">
                                    <a href="" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Лепнина полиуретановая <span class="caret"></span></a>
                                    <ul class="menu dropdown-menu">
                                        <li>
                                            <a href="">Карнизы гладкие</a>
                                        </li>
                                        <li>
                                            <a href="">Карнизы с орнаментом</a>
                                        </li>
                                        <li>
                                            <a href="">Молдинги, угловые элементы</a>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="">Полистерол</a>
                                </li>
                                <li>
                                    <a href="">Фасадный декор</a>
                                </li>
                                <li class="expanded dropdown">
                                    <a href="" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Ремонт под ключ <span class="caret"></span></a>
                                    <ul class="menu dropdown-menu">
                                        <li>
                                            <a href="">Котеджи</a>
                                        </li>
                                        <li>
                                            <a href="">Рестораны</a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itg-slider-wrap container-fluid padding-0">
                <div class="slider-inner slider-for">
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/1.jpg" alt="1">
                        <div class="info container">
                        <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Найти подарок</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/2.jpg" alt="2">
                        <div class="info container">
                        <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Найти подарок</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/3.png" alt="3">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Найти подарок</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/4.jpg" alt="4">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Найти подарок</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slider-inner slider-nav padding-0">
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/1.jpg" alt="1">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Купить сейчас</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/2.jpg" alt="2">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Купить сейчас</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/3.png" alt="3">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Купить сейчас</button>
                            </a>
                        </div>
                    </div>
                    <div class="itg-img-slide-item">
                        <img class="img-fluid"  src="/img/4.jpg" alt="4">
                        <div class="info container">
                            <div class="white-line">just line</div>
                            <h2>slide 1</h2>
                            <p class="under-slide-title">
                                some text info
                            </p>
                            <p class="description-slide">
                                some text description on slide
                            </p>
                            <a href="">
                                <button class="default-button-site">Купить сейчас</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itg-text-under-slider container-fluid padding-0">
                <div class="itg-devi-text itg-spoiler text-center">
                    <div class="spoiler-inner spoiler-inner-hidden">
                        <h2>Welcome to our store</h2>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                        <p>this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise this is some text for site devise </p>
                    </div>
                    <div>
                        <span class="read-more-spoiler read-more-spoiler-span">read more</span>
                        <span class="read-more-spoiler-span read-more-spoiler-close display-hidden">close</span>
                    </div>
                </div>
            </div>
            <div class="itg-content">
                <div class="itg-main-tabs container-fluid padding-0">
                    <div class="container text-center">
                        <div class="row">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#popular">Популярное</a></li>
                                <li><a data-toggle="tab" href="#new_prod">Новые поступления</a></li>
                                <li><a data-toggle="tab" href="#best_sel">Лидеры продаж</a></li>
                                <li><a data-toggle="tab" href="#sales">Скидки</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="popular" class="tab-pane fade in active">
                                    <div class="itg-tabs-slick1">
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/111.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">100 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/222.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">200 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/333.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">300 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/444.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">400 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/555.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">500 uah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="new_prod" class="tab-pane fade">
                                    <div class="itg-tabs-slick2">
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/111.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">100 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/222.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">200 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/333.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">300 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/444.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">400 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/555.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">500 uah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="best_sel" class="tab-pane fade">
                                    <div class="itg-tabs-slick3">
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/111.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">100 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/222.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">200 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/333.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">300 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/444.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">400 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/555.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">500 uah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="sales" class="tab-pane fade">
                                    <div class="itg-tabs-slick4">
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/111.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">100 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/222.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">200 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/333.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">300 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <h3 class="itg-shield">Разпродажа</h3>
                                                <img src="/img/444.png" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">400 uah</p>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="tabs-slick-item">
                                                <img src="/img/555.jpg" alt="">
                                                <div class="some-line">some-line</div>
                                                <h4 class="tab-name">some title</h4>
                                                <p class="tabs-price">500 uah</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itg-best-prod-wrap container-fluid padding-0">
                    <div class="best-prod-row container text-center">
                       <div class="row">
                           <div class="col-md-4">
                               <div class="white-line">just line</div>
                               <div class="text-best-prod">
                                   <h3>some header</h3>
                                   <h4>some second header</h4>
                                   <p>some text info</p>
                                   <p>some text info</p>
                               </div>
                               <button class="best-prod-button default-button-site">shop now</button>
                           </div>
                           <div class="col-md-4">
                               <div class="white-line">just line</div>
                               <div class="text-best-prod">
                                   <h3>some header</h3>
                                   <h4>some second header</h4>
                                   <p>some text info</p>
                                   <p>some text info</p>
                               </div>
                               <button class="best-prod-button default-button-site">shop now</button>
                           </div>
                           <div class="col-md-4">
                               <div class="white-line">just line</div>
                               <div class="text-best-prod">
                                   <h3>some header</h3>
                                   <h4>some second header</h4>
                                   <p>some text info</p>
                                   <p>some text info</p>
                               </div>
                               <button class="best-prod-button default-button-site">shop now</button>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="itg-manufactories-wrap container-fluid padding-0">
                    <div class="container  text-center">
                        <h3>Производители</h3>
                        <div class="manufactories-inner row">
                            <div class="manufactories-item"><img src="/img/manufactories/clasicodeco.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/decomaster_02.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/decor-dizayn_logo.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/decowood_balki_logo.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/evroplast_03.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/gaudi.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/harmony_lepnina.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/nmc_01.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/orac-decor_1.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/prestige_dekor_02.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/primierdekor_05.jpg" alt=""></div>
                            <div class="manufactories-item"><img src="/img/manufactories/vipdekor_classikhome_01.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="itg-utp-wrap container-fluid padding-0">
                    <div class="utp-row container text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="utp-item-first padding-20">
                                    <div class="some-line">some-line</div>
                                    <h3 class="utp-first">first column header 1</h3>
                                    <h3 class="utp-second">column header 2</h3>
                                    <p>some text information some text information </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="utp-item-second padding-20">

                                    <div class="some-line">some-line</div>
                                    <h3 class="utp-first">second column header 1</h3>
                                    <h3 class="utp-second">column header 2</h3>
                                    <p>some text information some text information </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="utp-item-third padding-20">
                                    <div class="some-line">some-line</div>
                                    <h3 class="utp-first">third column header 1</h3>
                                    <h3 class="utp-second">column header 2</h3>
                                    <p>some text information some text information </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itg-footer">
                <div class="footer-content-wrap container-fluid padding-0">
                    <div class="footer-inner container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4>About</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                            </div>
                            <div class="col-md-2">
                                <h4>Информация</h4>
                                <ul>
                                    <li><a href="#">Скидки</a></li>
                                    <li><a href="#">Новые товары</a></li>
                                    <li><a href="#">Популярные товары</a></li>
                                    <li><a href="#">Наш магазин</a></li>
                                    <li><a href="#">Свяжитесь с нами</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Страница конфогурации</a></li>
                                    <li><a href="#">Карта сайта</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h4>Категории</h4>
                                <ul>
                                    <li><a href="#">Floring tools</a></li>
                                    <li><a href="#">Tile</a></li>
                                    <li><a href="#">Vinyl</a></li>
                                    <li><a href="#">Carpet</a></li>
                                    <li><a href="#">Hardwood flooring</a></li>
                                    <li><a href="#">Laminate</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h4>Моя учетная запись</h4>
                                <ul>
                                    <li><a href="#">Мои заказы</a></li>
                                    <li><a href="#">Мои возвраты</a></li>
                                    <li><a href="#">Мои платежные квитанции</a></li>
                                    <li><a href="#">Мои адреса</a></li>
                                    <li><a href="#">Моя личная информация</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 itg-footer-contacts">
                                <h4>Контактная информация</h4>
                                <h5>г.Киев ул.Неизвестная 125</h5>
                                <div class="footer-telephones">
                                    <p><i aria-hidden="true" class="fa fa-phone"><span>fa</span></i><a href="tel:+38 (044)2095051">+38 (044)209-50-51</a></p>
                                    <p><i aria-hidden="true" class="fa fa-phone"><span>fa</span></i><a href="tel:+38 (067)4669608">+38 (067)46-69-608</a></p>
                                </div>
                                <p>EMAIL:<a href="mailto:estet_sm@ukr.net">estet_sm@ukr.net</a></p>
                                <div class="footer-socials">
                                    <p><a href="https://www.linkedin.com"><i aria-hidden="true" class="fa fa-linkedin-square"><span>fa</span></i></a></p>
                                    <p><a href="https://www.facebook.com"><i aria-hidden="true" class="fa fa-facebook-official"><span>fa</span></i></a></p>
                                    <p><a href="https://www.twitter.com"><i aria-hidden="true" class="fa fa-twitter"><span>fa</span></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itg-copyrights container-fluid padding-0">
                    <div class="copyrights-inner container">
                        <div class="row">
                            <div class="col-md-6 text-left"><p>developed by <a href="#">IT-GUYS</a></p></div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="default-button-site btn-info btn-lg contact-us-footer" data-toggle="modal" data-target="#myModalCallback"><i aria-hidden="true" class="fa fa-envelope"><span>fa</span></i>contact us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="itg-modals">
        <div id="myModalCallback" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="default-button-site" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </body>
</html>
