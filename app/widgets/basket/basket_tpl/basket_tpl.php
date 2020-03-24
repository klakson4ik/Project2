<div class="BasketDiv">
    <?php /** @var \app\widgets\currency\Currency $vars */ $curr = $vars ;?>
    <?php foreach ($_SESSION['basket'] as $item): ?>
    <div class="basketEachDiv">
            <div id="basketFirstDiv">
                <a href="../product/<?php echo $item['alias'] ;?>">
                    <img  src="../public/images/mobile/<?php echo $item['img'];?>" alt="сервер недоступен">
                </a>
            </div>
            <div id="basketCenterDiv">
                <p>
                    <a href="../product/<?php echo $item['alias'];?>"><?php echo $item['title']; ?></a>
                    <p><?php echo $item['complect']; ?></p>
                    <p><?php echo $item['color']; ?></p>
                </p>
            </div>

            <div id="basketEndFirstDiv">
                <label for="qty">Количество</label>
                <input type="number" value="<?php echo $item['qty'] ;?>" min="0" max="999" size="50px" name="qty" class="basketQty" data-basketprice="<?php echo $item['price'];?>">
            </div>
            <div id="basketEndSecondDiv">
                <p>Цена: <?php echo $curr['Symbol_left']; echo $item['price'] * $curr['value']; echo $curr['Symbol_right'];?></p>
                <p data-thisFullPrice="<?php echo $item['qty'] * $item['price'] * $curr['value'] ;?>">Общая цена: <?php echo $curr['Symbol_left']; echo $item['qty'] * $item['price'] * $curr['value']; echo $curr['Symbol_right']?></p>
            </div>
            <div id="basketEndDiv">
                <div class="cl-btn-4"></div>
                <div class="cl-btn-5"></div>
            </div>
    </div>
    <?php endforeach ;?>
    <p class="basketFullPrice">Товаров на сумму:  </p>
    <textarea name="note" id="note" cols="80" rows="5"></textarea>,</br>
    <button class="basket-button-order" type="button">Купить</button>

    <button class="basket-button-close" type="button" name="close">Закрыть</button>

</div>
