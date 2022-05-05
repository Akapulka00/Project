<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/css/main.css">

</head>
<body>

<header class="flex-row">

        <img class="logo col-2" src="/img/logo.png">

    <nav class=" flex-row col-9 nav_bloc">
      <a href="/home">Главная</a>
      <a href="">Контакты</a>
      <a href="">Курсы</a>
        <a href="">Отзывы</a>
        <a href="">Партфолио</a>
        <a href="">О нас</a>
    </nav>
</header>

<main >
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
        <h1>Наши курсы</h1>
    </div>
    <div class="cursBox flex-row">
        <div class="cursCard ">
            <img src="/img/5.jpeg">
            <div class="cursCardInfo">
            <h2 class="cursTitile">Основы протезирования зубов керамическими реставрациями CAD CAM</h2>
            <strong class="cursInfo">Лектор: Левандовский Эдвард Викторович — стоматолог-ортопед, специалист в цифровой стоматологии с опытом работы более 6 лет.</strong>
            <p class="cursPrise">10000 р.</p>
                <a class=" podrobW" href="www.google.ru">Подробнее</a>
                <a class="px-2 zapBlack" href="www.google.com">Записаться</a>
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
</main>
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

                        <button type="submit" class="btn btn-dark mt-2 mb-4 buttonse">Submit</button>
                    </form>
                </div>
    </div>

    </div>
</div>
<div>
    <h1>Отызвы о  нас </h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="Первый слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Второй слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Третий слайд">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="test"></div>
<script src="/build/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
