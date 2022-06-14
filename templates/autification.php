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

    <a  href="/home" class="col-2"><img class="logo " src="/img/logo.png"></a>

    <nav class=" flex-row col-lg-9 col-12 nav_bloc">
        <a class="col-sm-12 col-lg-1 text-center" href="/home">Главная</a>
        <a class="col-sm-12  col-lg-1 text-center" href="/home#a1">Контакты</a>
        <a  class="col-sm-12 col-lg-1 text-center"  href="/home#a2">Курсы</a>
        <a class="col-sm-12 col-lg-1 text-center" href="/home#a3">Отзывы</a>
        <a  class="col-sm-12 col-lg-1 text-center" href="/portfolio">Партфолио</a>
        <a class="col-sm-12 col-lg-1 text-center" href="/home#a4">О нас</a>
    </nav>
</header>
<main>
    <div class="reception_admin_container">
        <div class=" col-6 cursCard pt-4">
            <form class="form_reviews">
                <h4>Введите свой логин и пороль</h4>
                <div class="form-group ">
                    <label for="login">login</label>
                    <input type="text" class="form-control"  name="login" id="login"  placeholder="login">
                </div>
                <div class="form-group pt-2">
                    <label for="pass">Пороль</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark mt-2 mb-4 buttonse ">Войти</button>
            </form>
        </div>
    </div>
</main>
<script src="/build/js/main.js"></script>
<!-- jQuery (необходим для Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
</body>
</html>
