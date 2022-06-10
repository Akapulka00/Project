<!doctype html>
<html lang="ru">
<head >
    <meta charset="UTF-8">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/css/main.css">

</head>
<body >

<header class="flex-row show ">

        <img class="logo col-2" src="/img/logo.png">

    <nav class=" flex-row col-lg-9 col-12 nav_bloc">
      <a class="col-sm-12 col-lg-1 text-center" href="/home">Главная</a>
      <a class="col-sm-12  col-lg-1 text-center" href="#a1">Контакты</a>
      <a  class="col-sm-12 col-lg-1 text-center"  href="#a2">Курсы</a>
        <a class="col-sm-12 col-lg-1 text-center" href="#a3">Отзывы</a>
        <a  class="col-sm-12 col-lg-1 text-center" href="">Партфолио</a>
        <a class="col-sm-12 col-lg-1 text-center" href="#a4">О нас</a>
    </nav>
</header>

<main class="show" >
    <div class="first_content flex-column">
        <div class="arroww"> <div class="arrow arrow-bottom circle " ></div></div>

    </div>
    <div class="flex-column row_center">
    <div class="">
        <h1>Учебный центр Диадент</h1>
    </div>
    <div class="col-6">
        <p>Проводим практические курсы и вебинары для повышения квалификации врачей</p>
    </div>
    </div>
    <div class="padding_h1">
        <h1 id="a2">Наши курсы</h1>
    </div>
    <div class="cursBox flex-row">
        <div  class="cursCard ">
            <img src="/img/5.jpeg">
            <div class="cursCardInfo">
            <h2 class="cursTitile">Основы протезирования зубов керамическими реставрациями CAD CAM</h2>
            <strong class="cursInfo">Лектор: Левандовский Эдвард Викторович — стоматолог-ортопед, специалист в цифровой стоматологии с опытом работы более 6 лет.</strong>
            <p class="cursPrise">10000 р.</p>
                <a class=" podrobW" data-course="1" href="">Подробнее</a>
                <a class="px-2 zapBlack" href="/reception">Записаться</a>
            </div>
        </div>
        <a class="cursCard ">

        </a>
        <a class="cursCard ">

        </a>
    </div>
    <div class="Our_advantages">
        <h1>Наши преймущества</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <img class="info_image " src="https://static.tildacdn.com/tild3633-3161-4230-a636-306663333231/_.png">
                    <h3>Актуальная информация</h3>
                    <p>Мы не хотим просто продать Вам курсы наших лекторов, мы занимаемся обучением! В нашем Instagram мы делаем бесплатные вебинары, на сайте мы выкладываем их запись, новости и статьи</p>

                </div>
                <div class="col-md-6 ">
                    <img class="info_image " src="https://static.tildacdn.com/tild6663-6136-4461-a463-666337333236/knowledge.png">
                    <h3>Разноплановость</h3>
                    <p>Вы только начинаете свое обучение и еще не уверенны в своих силах или Вы опытный специалист и считаете, что все знаете? Избавьтесь от предрассудков! Вы тоже можете повысить свою квалификацию и получить новые знания</p>

                </div>
            </div>
            <div class="row  ">
                <div class="col-md-6">
                    <img class="info_image " src="https://static.tildacdn.com/tild3139-6335-4862-b962-633835366531/technical-support.png">
                    <h3>Передовые технологии</h3>
                    <p>Как говорил известный ученый: любая хороша развитая технология неотличима от магии. Мы используем самое современное оборудование
                        для работы и обучения!</p>

                </div>
                <div class="col-md-6 ">
                    <img class="info_image " src="	https://static.tildacdn.com/tild6263-6532-4364-a532-633032353838/wheel.png">
                    <h3>Бесплатно</h3>
                    <p>Пока Вы это читаете, кто-то участвует в розыгрыше бесплатных мест, скидок и других бонусов в нашем Instagram. Не верите? Посмотрите видео-отзывы наших победителей!</p>

                </div>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 ">
                    <h1>Нам важно ваше мнение</h1>
                </div>
                <div class=" col-lg-4 col-sm-12 cursCard pt-4">
                    <form class="form_reviews">
                        <h4>Оставьте ваш отзыв</h4>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="name"  placeholder="Имя">
                        </div>
                        <div class="form-group pt-2">
                            <input type="text" class="form-control" id="specialization" placeholder="Специализация">
                        </div>
                        <div class="form-group pt-2">
                            <input type="tel" class="form-control" id="telphone" placeholder="Телефон">
                        </div>
                        <div class="form-group pt-2">
                            <input type="text"  class="form-control" style="height: 200px;" id="text" placeholder="Текст">
                        </div>

                        <button type="submit" class="btn btn-dark mt-2 mb-4 buttonse">Отправить</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div>
        <h1 id="a3">Отызвы о  нас </h1>
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->

                <div class="carousel-item active">
                    <div class="card_feedback">
                        <p class="feedback_text">Спасибо за курс, много новой и полезной информации.</p>
                        <p class="feedback_fio">  Сбойнова Александра</p>
                        <p class="feedback_post">Стоматолог-ортопед</p>
                        <p class="feedback_company ">Цифровые функциональные протоколы</p>
                    </div>

                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div class="card_feedback">
                        <p class="feedback_text" >Все супер.</p>
                        <p class="feedback_fio" >Андрей Байдак</p>
                        <p class="feedback_post" >Хирург-ортопед</p>
                        <p class="feedback_company ">Навигационная хирургия</p>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="card_feedback">
                        <p class="feedback_text">Было очень интересно и познавательно! Будем стараться использовать полученные знания в своей работе.</p>
                        <p class="feedback_fio">Соболева Ольга Сергеевна</p>
                        <p class="feedback_post">Стоматолог-хирург-ортопед</p>
                        <p class="feedback_company">Цифровые функциональные протоколы</p>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

    </div>
    <div class="info_video">
        <h1 id="a4">О нас! </h1>
        <div class="info_video">
            <div id="rec308159955" class="r t-rec t-rec_pt_30 t-rec_pb_210 r_anim r_showed" style="padding-top:30px;padding-bottom:210px; " data-record-type="4"><!-- T121 --><div class="t121"><center><div class="t-video-lazyload t-width t-width_10" style="height: 438.75px;" data-videolazy-type="youtube" data-videolazy-id="xkeAPaNwPio" data-blocklazy-id="308159955" data-videolazy-load="true" data-videolazy-height="540px"><iframe id="youtubeiframe308159955" width="100%" height="540px" src="//youtube.com/embed/xkeAPaNwPio?rel=0&amp;fmt=18&amp;html5=1&amp;showinfo=0" frameborder="0" allowfullscreen="" style="height: 438.75px;"></iframe></div></center></div><script> $(document).ready(function() { t121_setHeight("308159955"); $(window).on('load', function() { t121_setHeight("308159955"); }); $(window).on('scroll', t_throttle(function() { t121_setHeight("308159955"); })); $(window).on('resize', function() { if ($('#allrecordstable').length > 0) { $('#rec308159955').find('.t-video-lazyload').css('height', '540px'); $('#rec308159955').find('.t-video-lazyload').find('iframe').css('height', '540px'); } else { t121_setHeight("308159955"); } }); $('#rec308159955 .t121').on('displayChanged', function() { t121_setHeight("308159955"); }); }); </script></div>
        </div>

    </div>
</main>

<footer class="show" >

    <div class=" card container">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A18bf8b168cb7cc302cf7deec1b07fb574c0c028a679f05976cc17b44a642b303&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        <div class="info box">
            <div id="a1" class="bloc_info">
                <h3>Свяжитесь с нами</h3>
                <p>Санкт-Петербург ул. Писарева 18</p>
                <p>Тел.: +7(961)806-40-64</p>
                <p>Почта: diadenteducation@mail.ru</p>
                <p>diadent-clinic.ru</p>
                <a href="https://www.instagram.com/diadent_school/" > <img src="/img/icons8-vk-в-круге-60.png"></a>
            </div>
        </div>
    </div>
    <a class="call_we" href="">
        <div class="t651__btn_wrapper t651__btn_animate" style="background:#1278bc;">
            <svg class="t651__icon" style="fill:#ffffff;" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 19.3 20.1">
                <path d="M4.6 7.6l-.5-.9 2-1.2L4.6 3l-2 1.3-.6-.9 2.9-1.7 2.6 4.1"></path>
                <path d="M9.9 20.1c-.9 0-1.9-.3-2.9-.9-1.7-1-3.4-2.7-4.7-4.8-3-4.7-3.1-9.2-.3-11l.5.9C.2 5.7.4 9.7 3 13.9c1.2 2 2.8 3.6 4.3 4.5 1.1.6 2.7 1.1 4.1.3l1.9-1.2L12 15l-2 1.2c-1.2.7-2.8.3-3.5-.8l-3.2-5.2c-.7-1.2-.4-2.7.8-3.5l.5.9c-.7.4-.9 1.3-.5 2l3.2 5.2c.4.7 1.5.9 2.2.5l2.8-1.7 2.6 4.1-2.8 1.7c-.7.5-1.4.7-2.2.7zM13.7 11.3l-.9-.3c.4-1.1.2-2.2-.4-3.1-.6-1-1.7-1.6-2.8-1.7l.1-1c1.5.1 2.8.9 3.6 2.1.7 1.2.9 2.7.4 4z"></path> <path d="M16.5 11.9l-1-.3c.5-1.8.2-3.7-.8-5.3-1-1.6-2.7-2.6-4.7-2.9l.1-1c2.2.3 4.2 1.5 5.4 3.3 1.2 1.9 1.6 4.1 1 6.2z"></path> <path d="M18.9 12.5l-1-.3c.7-2.5.2-5.1-1.1-7.2-1.4-2.2-3.7-3.6-6.3-4l.1-1c2.9.4 5.4 2 7 4.4 1.6 2.4 2.1 5.3 1.3 8.1z"></path>
            </svg>
        </div>
    </a>
</footer >
<script src="/build/js/main.js"></script>
<!-- jQuery (необходим для Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
</body>
</html>
