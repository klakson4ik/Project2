<?php $curr = new app\widgets\currency\Currency();?>
<div class="relatedeach">
    <?php /** @var \vendor\core\base\Controller $vars */
    foreach ($vars as $value) : ?>
        <div class="relatedeachdiv">
            <p><a href="../product/<?php echo $value['alias'];?>"><?php echo $value['title']; ?></a></p>
            <a href="../product/<?php echo $value['alias'];?>"><img class="relatedimages" src="../public/images/mobile/<?php echo $value['img'];?>" alt="Сервер недоступен"></a><br/>
            <span><?php echo $curr->currency['Symbol_left']; echo $value['price'] * $curr->currency['value']; echo $curr->currency['Symbol_right'];?> </span>
            <?php if($value['old_price'] > 0): ?>
                <span id="relatedoldprice"> <?php echo $curr->currency['Symbol_left']; echo $value['old_price'] * $curr->currency['value']; echo $curr->currency['Symbol_right'];?></span>
            <?php endif;?>
            <p><button type="button" class="add-to-cart" data-id="<?php echo $value['id'];?>">В корзину</button><button type="button" class="bay-all" name="bay">Купить</button></p>
        </div>
    <?php  endforeach;?>
</div>

