
<div class="slayder">
   <div class="slayderimg">
      <img src="../public/images/Slayder/1.jpg" alt="Картинка недоступна">
   </div>
   <div class="slayderswap">

   </div>
</div>
<div class="product">
    <?php $arrayProduct = $this->getData()['pages'];
    $filters = $this->getData()['filters'];
    $view = $this->getData()['view'];
    if(!empty($arrayProduct)) : ?>
        <div class="related">
            <?php echo $arrayProduct; ?>
        </div>
    <?php else: ?>
        <h1>Товаров в данной категории не найдено</h1>
    <?php endif; ?>
    <div class="filters"><?php echo $filters ;?></div>
    <div class="pagination"><?php echo $view; ?></div>
</div>

<style>
    .product{
        display: grid;
        grid-template-columns: 1fr 200px;
        grid-template-rows: 1fr 40px;
        margin: 10px;
    }

    .related{
        grid-column: 1  ;
        grid-row: 1 ;
    }

    .pagination {
        grid-column: 1;
        grid-row: 2;
    }

    .filters {
        grid-column: 2;
        grid-row: 1/2;
    }
</style>