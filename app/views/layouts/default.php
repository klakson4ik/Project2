<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?= $this->getMeta(); ?>
    </head>
    <body>
        <div class="modalWindowBasket">

        </div>
        <header>
            <select id="currency" name="currency">
                <?php $var = new app\widgets\currency\Currency(); echo  $var->getHtml(); ?>
            </select>
            <div class="cir1">
                <img src="../public/images/other/lens.png" alt="Линза" width="96px" height="96px">
            </div>
            <div class="reg-auth">
                <?php if(!isset($_SESSION['login'])) :?>
                   <span class="authorisation">
                       <a href="/user/authorisation">Войти</a>
                   </span>
                    <span class="registration">
                       <a href="/user/registration">Зарегистрироваться</a>
                   </span>
                <?php else :?>
                    <span class="logout">
                       <a href="/user/logout">выйти </a>
                   </span>
                    <span class="auth-user">
                       <span>Вы <a href="#"><?php echo $_SESSION['login'];?></a></span>
                   </span>
                <?php endif ;?>
            </div>
            <div class="basket">
                <img src="../public/images/other/basket.png" alt="Basket" >
                <div>
                    <?php $basket = new app\widgets\basket\Basket(new \app\widgets\basket\BasketCookie(), new \app\widgets\currency\Currency()); $basket->getHtml(WIDJETS . '/basket/basket_tpl/basket_current_price.php');?>
                </div>
            </div>
            <div class="menu">
                <ul><?php $menu = new app\widgets\menu\Menu(); ?></ul>
            </div>
            <div class="search">
                <form action="../search/view" method="GET">
                    <input type="text" id="search-input" name="query" placeholder="Найти..." autocomplete="off">
                    <input type="text" class="search-input-hidden" style="top: 33px" disabled>
                    <span class="search-span-hidden" style="top: 33px"></span>
                    <input class="search-input-hidden" style="top: 66px" disabled>
                    <span class="search-span-hidden" style="top: 66px"></span>
                    <input class="search-input-hidden" style="top: 99px" disabled>
                    <span class="search-span-hidden" style="top: 99px"></span>
                    <input class="search-input-hidden" style="top: 132px" disabled>
                    <span class="search-span-hidden" style="top: 132px"></span>
                    <input class="search-input-hidden" style="top: 165px" disabled>
                    <span class="search-span-hidden" style="top: 165px"></span>
                    <input class="search-input-hidden" style="top: 198px" disabled>
                    <span class="search-span-hidden" style="top: 198px"></span>
                    <input class="search-input-hidden" style="top: 231px" disabled>
                    <span class="search-span-hidden" style="top: 231px"></span>
                    <input class="search-input-hidden" style="top: 264px" disabled>
                    <span class="search-span-hidden" style="top: 264px"></span>
                    <input type="submit" id="search-btn"  value="&#128269">
                </form>
            </div>
        </header>
        <div class="content">
            <?= /** @var Object $content */
            $content;?>
        </div>
        <footer>
            <div class="mulbut">
                <span>Телефон: 89000000000</span>
                <p>E-mail: email@mail.ru</p>
                <p>Адрес: Россия</p>
            </div>
        </footer>
        <script>
            var course = '<?=$var->currency['value'];?>',
                symboleLeft = '<?=$var->currency['Symbol_left'];?>',
                symboleRight = '<?=$var->currency['Symbol_right'];?>';
        </script>
        <script src="../public/js/slayder.js"></script>
        <script src="../public/js/currency.js"></script>
        <script src="../public/js/main.js"></script>
        <script src="../public/js/menu.js"></script>
        <script src="../public/js/search.js"></script>
    </body>
</html>



