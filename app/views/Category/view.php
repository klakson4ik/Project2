<?php $category = $this->getData()['pages'];
$view = $this->getData()['view'];
$breadcrumbs = $this->getData()['breadcrumbs']; ?>

<div class="breadcrumbs">
    <?= $breadcrumbs ;?>
</div>

<?php if(!empty($category)) : ?>
    <div class="related">
        <p>Товары данной категории</p>
        <?php echo $category; ?>
    </div>
<?php else: ?>
    <h1>Товаров в данной категории не найдено</h1>
<?php endif; ?>
<div><?php echo $view; ?></div>
