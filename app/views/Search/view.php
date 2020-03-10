<?php $searchData = $this->getData()['pages'];
$view = $this->getData()['view'];
$breadcrumbs = $this->getData()['breadcrumbs'];?>

<div class="breadcrumbs">
    <?= $breadcrumbs ;?>
</div>

<?php if(!empty($searchData)) : ?>
    <div class="related">
        <p>Товары по запросу</p>
            <?php echo $searchData; ?>
    </div>
<?php else: ?>
    <h1>Товаров по запросу не найдено</h1>
<?php endif; ?>
<div><?php echo $view; ?></div>
