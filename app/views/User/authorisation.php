<?php if(isset($_SESSION['auth'])) :?>
    <?php if(!isset($_SESSION['auth']['is_true'])) :?>
        <div class="auth-error">Пользователь <?php echo $_SESSION['auth']['login'];?> не зарегестрирован</div>
    <?php else :?>
        <div class="auth-error"> Для пользователя <?php echo $_SESSION['auth']['login'];?> пароль не совпадает</div>
    <?php endif;?>
<?php endif ;?>



<form action="/user/authorisation" method="post" class="authorisation-form">
    <label for="login"> Логин</label><input type="text" name="login" id="login"><br>
    <label for="password"> Пароль</label><input type="password" name="password" id="password"><br>
    <input type="submit" value="Отправить" id="send-form-validate">
    <?php if(isset($_SESSION['is_auth']) && ($_SESSION['is_auth'] == "0")):?>
        <input value="Зарегестрироваться" type="button" onclick="location.href='/user/registration'" />
    <?php endif;?>
</form>

<style>
    .authorisation-form
    {
        margin-left: 100px;
    }


    .authorisation-form label{
        margin-right: 50px;
        margin-bottom: 50px;
    }

    .authorisation-form input{
        margin-bottom: 20px;
    }

    .auth-error{
        background-color: lightcoral;
        margin: 30px;
        padding: 30px;
    }


    #login{
        margin-top: 20px;
    }


</style>
