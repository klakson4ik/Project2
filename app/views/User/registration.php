<form action="/user/validate" method="post" class="validate-form">
    <label for="login"> Логин</label><input type="text" name="login" id="login"><br>
    <label for="email"> Почта</label><input type="email" name="email" id="email"><br>
    <label for="password"> Пароль</label><input type="password" name="password" id="password"><br>
    <label for="password-confirm"> Подтверждение пароля</label><input type="password" id="password-confirm"><br>
    <label for="telephone"> Телефон</label><input type="text" name="telephone" id="telephone"><br>
    <label for="address"> Адрес</label><input type="text" name="address" id="address"><br>
    <input type="submit" value="Отправить" id="send-form-validate">
</form>

<style>
    .validate-form
    {
        margin-left: 100px;
    }


    .validate-form label{
        margin-right: 50px;
        margin-bottom: 50px;
    }

    .validate-form input{
        margin-bottom: 20px;
    }

    #login{
        margin-top: 20px;
    }


</style>