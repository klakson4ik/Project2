<?php /** @var TYPE_NAME $vars */
foreach ($vars['validateErrors'] as $key=> $value) :?>
    <?php if(in_array($value, $vars['user'])):?>
        <p><?php echo $key ;?> <span> <?php echo $value ; ?></span> уже существует </p>
    <?php endif ;?>
<?php endforeach;?>
