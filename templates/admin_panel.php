<?php
if (isset($_POST["action"]))
$postdata=$_POST["action"];
else
    $postdata=false;

?>
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
    <?php
    if ($postdata==true) {?>
    <div class="reception_table_container">
        <h1>У вас нет прав пользаваться данной страницей</h1>
    </div>

    <?php
    }else{?>

    <div class="reception_table_container">
        <h2>Заявки на курс</h2>
        <div>
            <table class="table table-bordered  table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Email</th>
                    <th scope="col">Обработан</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Алексей</td>
                    <td>Владимирович</td>
                    <td>8800553535</td>
                    <td>google@gmail.com</td>
                    <td class="table-danger">false</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Анатолий</td>
                    <td>Васильевич</td>
                    <td>8800553536</td>
                    <td>googlle@gmail.com</td>
                    <td class="table-success">True</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="person_admin_button">
            <button type="button" class="btn btn-light">Обновить</button>
        </div>
        <div class="reception_table_container">
            <h2>Текущие курсы</h2>
            <div>
                <table class="table table-bordered  table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Название группы</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>SCAD системы</td>
                        <td>2022-06-22 16:00:00</td>
                        <td>Ортодонты</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>SCAD системы</td>
                        <td>2022-06-22 18:00:00</td>
                        <td>Херурги</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="reception_admin_container">
            <div class=" d-flex justify-content-center pt-9">
                <form class="form_reviews">
                    <h4>ID пользавателя и ID курса</h4>
                    <div class="form-group ">
                        <label for="ID_persone">ID пльзавателя</label>
                        <input type="number" class="form-control"  name="ID_persone" id="ID_persone"  placeholder="ID пльзавателя">
                    </div>
                    <div class="form-group pt-2">
                        <label for="ID_groupe">ID курса</label>
                        <input type="number" class="form-control" name="ID_groupe" id="ID_groupe" placeholder="ID курса">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2 mb-4 buttonse ">Добавить</button>
                </form>
            </div>
        </div>
        <div class="reception_admin_container">
            <div class=" d-flex justify-content-center  pt-9">
                <form class="form_reviews">
                    <h4>Введите номер курса</h4>
                    <div class="form-group pt-2">
                        <label for="ID_course">ID курса</label>
                        <input type="number" class="form-control" name="ID_course" id="ID_course" placeholder="ID курса">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2 mb-4 buttonse ">Отобразить</button>
                </form>
            </div>
        </div>
    <?php
    }?>

</main>
<script src="/build/js/main.js"></script>
<!-- jQuery (необходим для Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
</body>
</html>
