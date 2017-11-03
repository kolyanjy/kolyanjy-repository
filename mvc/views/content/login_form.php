
<div class="container">

    <h1>Вход</h1>

    <form action="/login/auth" class="form" id="myForm" method="post">

        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input type="email" name="email" class="form-control" id="email"
                   placeholder="Введите email">
        </div>

        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" name="pass" id="pass" class="form-control"
                   placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn-default" id="submit">Отправить</button>

    </form>
</div>