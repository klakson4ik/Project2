<?php $category; ?>
<li>

    <a href="category/<?php $category['alias'];?>"><?php $category['title']; ?></a>
    <?php if(isset($category['childs'])): ?>
        <ul>
            <?php $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>

