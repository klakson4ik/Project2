<?php //debug($this->filterPositions); ?>

<div class="filters-group">
    <?php foreach ($this->filterTitles as $title) : ?>
        <div class="filter-block">
            <p class="filter-title"><?php echo $title ;?></p>
            <?php if(count($this->filterPositions[$title]) > 4 && gettype($this->filterPositions[$title][0]) !== "string"):?>
                 <?php foreach ($this->filterPositions[$title] as $filter) :?>
                    <input type="checkbox" id="<?php echo $filter;?>" value="<?php echo $filter;?>"><label for="<?php echo $filter;?>"><?php echo $filter;?></label>
                 <?php endforeach ;?>
            <?php else :?>
                <input type="checkbox" id="<?php echo $filter;?>" value="<?php echo $filter;?>"><label for="<?php echo $filter;?>"><?php echo $filter;?></label>
            <?php endif;?>
        </div>
    <?php endforeach;?>
</div>


<style>
    .filter-block{
        border: 1px solid black;
        width: 300px;
        height: auto;
        margin-bottom: 10px;
        display: flex;

    }

    .filter-block > p{
        border-bottom: 1px solid black;
        width: 300px;
        height: auto;
    }
</style>