
<div class="slayder">
   <div class="slayderimg">
      <img src="../public/images/Slayder/1.jpg" alt="Картинка недоступна">
   </div>
   <div class="slayderswap">

   </div>
</div>
<div class="product">
    <?php $arrayProduct = $this->getData()['pages'];
    $view = $this->getData()['view'];
    if(!empty($arrayProduct)) : ?>
        <div class="related">
            <?php echo $arrayProduct; ?>
        </div>
    <?php else: ?>
        <h1>Товаров в данной категории не найдено</h1>
    <?php endif; ?>
    <div><?php echo $view; ?></div>
</div>

