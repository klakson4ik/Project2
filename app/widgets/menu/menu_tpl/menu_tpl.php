<li>
    <a href="../category/<?php echo $category['alias'];?>"><?php echo $category['title']; ?></a>
    <?php if(isset($category['childs'])): ?>
        <ul>
            <?php $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>