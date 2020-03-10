<?php foreach ($vars['validateErrors'] as $array) :?>
    <?php foreach ($array as $value) :?>
        <p><?php echo $value ;?> </p>
    <?php endforeach;?>
<?php endforeach;?>