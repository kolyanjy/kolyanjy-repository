<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="custom.css" />
    <title>Title</title>

</head>
<body>


<div class="container">

    <h1>Вход</h1>

    <form action="login.php" class="form" id="myForm" method="post">

        <div class="none">
            <div class="form-group">
                <label for="second-name">Имя</label>
                <input type="text" name="second_name" id="second-name" class="form-control"
                       placeholder="Введите Имя">
            </div>
            <div class="form-group">
                <label for="first-name">Фамилия</label>
                <input type="text" name="first_name" id="first-name" class="form-control"
                       placeholder="Введите фамилию">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input type="email" name="email" class="form-control" id="email"
                   placeholder="Введите email">
        </div>

        <div class="form-group">
            <label for="pass">пароль</label>
            <input type="password" name="pass" id="pass" class="form-control"
                   placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn-default" id="submit">Отправить</button>

    </form>
    <button  class="btn btn-default" id="registration">Регистрация</button>
</div>
<!--<div class="view">-->
<!--    <button class="view_btn btn btn-default center-block">показать контакты</button>-->
<!--</div>-->
<script src="jquery-3.2.1.min.js"></script>
<script src="jquery_validate/dist/jquery.validate.js"></script>
<script src="custom.js"></script>
</body>
</html>