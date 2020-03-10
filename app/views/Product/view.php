<?php
$product = $this->getData()['product'];
$related = $this->getData()['related'];
$recentlyViewed = $this->getData()['RecentlyViewed'];
$breadcrumbs = $this->getData()['breadcrumbs'];
$color = $this->getData()['color'];
$complect = $this->getData()['complect'];
$curr = new app\widgets\currency\Currency();?>

<div class="breadcrumbs">
    <?= $breadcrumbs ;?>
</div>

<div class="product">
    <div class="firstdiv">
        <div class="image">
            <img src="../public/images/mobile/<?php echo $product['img'];?>" alt="Сервер недоступен" width="300px" height="100%">
        </div>
        <div class="imagesrow"></div>
    </div>
    <div class="centerdiv">
        <div class="centerdivtop">
            <span class="title"><?php echo $product['title'];?> </span>
            <span class="price"  data-price="<?= $product['price'] * $curr->currency['value'];?>"><?php echo $curr->currency['Symbol_left']; echo $product['price'] * $curr->currency['value']; echo $curr->currency['Symbol_right'];?> </span>
            <?php if($product['old_price'] > 0): ?>
                <span class="oldprice"> <?php echo $curr->currency['Symbol_left']; echo $product['old_price'] * $curr->currency['value']; echo $curr->currency['Symbol_right'];?></span>
            <?php endif;?>
            <hr id="pcf1" width="80%"/>
        </div>
        <div class="centerdivmid1"
            <p><pre class="content"><?php echo $product['content'];?></pre></p>
        </div>
<!--    Complect-->
        <div class="centerdivmid2">
            <?php if(!empty($complect)): ?>
                <p><span style="margin-right: 60px">Complect</span>
                    <select name="complect" id="complect">
                        <?php foreach ($complect as $value) :?>
                            <option data-complectid="<?=$value['id'];?>" data-coefficient="<?= $value['coefficient'] ;?>" value="<?php echo $value['complect'];?>"><?php echo $value['complect'];?></option>
                        <?php endforeach;?>
                    </select>
                </p>
            <?php endif;?>
<!--     Color-->
            <?php if(!empty($color)): ?>
                <p><span style="margin-right: 60px">Color</span>
                    <select name="color" id="color">
                            <?php foreach ($color as $value) :?>
                                <option data-colorid="<?=$value['id'];?>" data-coefficient="<?= $value['coefficient'] ;?>" value="<?php echo $value['color'];?>"><?php echo $value['color'];?></option>
                            <?php endforeach;?>
                    </select>
                </p>
            <?php endif;?>
        </div>
    <div class="centerdivbot">
        <hr id="pcf2" width="80%"/>
        <p>
            <label for="qty">Количество</label>
            <input type="number" value="1" min="1" max="99999" size="200px" name="qty" class="qty">
            <button type="button" class="add-to-cart" data-id="<?=$product['id'];?>">В корзину</button><button type="button" class="bay-all" name="bay">Купить</button>
        </p>
    </div>
</div>
    <div class="enddiv"></div>
<!--------------------------------------------------------------------------------------------------------------------------------------->
<?php if(!empty($related)) : ?>
    <div class="related">
        <p>Похожие товары</p>
            <?php echo $related ;?>
    </div>
<?php endif;?>
<!------------------------------------------------------------------------------------------------------------------------------>
<?php if(!empty($recentlyViewed)) : ?>
    <div class="related">
        <p>недавно просмотренные<p>
            <?php echo $recentlyViewed ;?>
    </div>
<?php endif;?>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
