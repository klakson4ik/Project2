<a href="/"> <span>Главная ></span></a>
<?php /** @var ARRAY $data */;
foreach ($data as $val) :?>
    <a href="/category/<?php echo lcfirst($val); ?>"><span><?php echo $val; ?></span></a><span> > </span>
<?php endforeach ;?>
<?php if(isset($currentItem)) :?>
    <span><?php echo $currentItem;?></span>
<?php endif;?>
