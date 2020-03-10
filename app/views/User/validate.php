<?php $data = $this->getData(); ?>
<div class="exsistsErrors">
    <?php echo $data['validateErrors'];?>
</div>
<form action="/user/validate" method="post" class="validate-form">
    <label for="login"> Логин</label><input type="text" name="login" id="login" value="<?php echo $data['user']['login'] ;?> "><br>
    <label for="email"> Почта</label><input type="email" name="email" id="email" value="<?php echo $data['user']['email'] ;?> "><br>
    <label for="password"> Пароль</label><input type="password" name="password" id="password"><br>
    <label for="password-confirm"> Подтверждение пароля</label><input type="password" name="password-confirm" id="password-confirm"><br>
    <label for="telephone"> Телефон</label><input type="text" name="telephone" id="telephone" value="<?php echo $data['user']['telephone'] ;?> "><br>
    <label for="address"> Адрес</label><input type="text" name="address" id="address" value="<?php echo $data['user']['address'] ;?> "><br>
    <input type="submit" value="Отправить" id="send-form-validate">
</form>


<script src="../public/js/validate.js"></script>








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

    .exsistsErrors{
        background-color: lightcoral;
        font-size: 0.8rem;
        line-height: 0.7;
        padding: 10px;
        margin: 10px;
    }

    .exsistsErrors p {
        margin-left: 73px;
    }

    .exsistsErrors span{
        font-weight: bold;
    }


    .no-validate{
        border: 1px solid red;
        box-shadow: 0 0 2px;
    }

    .validate{
        border: 1px solid green;
        box-shadow: 0 0 2px;
    }

</style>