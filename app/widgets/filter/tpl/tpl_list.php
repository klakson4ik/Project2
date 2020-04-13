<?php //debug($this->filterView); ?>

<div class="filters-group">
    <?php foreach ($this->filterTitles as $title) : ?>
        <div class="filter-block">
            <div class="filter-title"><p><?php echo $title ;?></p></div>
            <?php if (($this->filterView[$title]['filter'] == "select") || (count($this->filterPositions[$title]) <= 4)):?>
                <?php foreach ($this->filterPositions[$title] as $filter) :?>
                    <div class="filter-select">
                        <input type="checkbox" id="<?php echo $filter;?>" value="<?php echo $filter;?>"><label for="<?php echo $filter;?>"><?php echo $filter; echo $this->filterView[$title]['symbol'];?></label>
                    </div>
                <?php endforeach ;?>
            <?php else :?>
                <div class="filter-slider-value" data-symbol="<?php echo $this->filterView[$title]['symbol'];?>"><?php $avgValue = round(count($this->filterPositions[$title])/2); echo $avgValue; echo $this->filterView[$title]['symbol'];?></div>
                <div class="slider-container">
                    <input type="range" min="1" max="<?php echo count($this->filterPositions[$title]) ;?>" class="filter-slider" list="slider-step" value="<?php echo $avgValue;?>">
                    <datalist id="slider-list">
                        <?php foreach($this->filterPositions[$title] as $filter):?>
                            <option value="<?php echo $filter ;?>">
                        <?php endforeach;?>
                    </datalist>
                </div>
            <?php endif;?>
        </div>
    <?php endforeach;?>
</div>


<style>

    .filters-group{
        display: flex;
        flex-direction: column;
        width: 200px;
    }
    .filter-block{
        display: grid;
        border: 1px solid black;
        height: auto;
        margin-bottom: 10px;
        font-size: 0.8rem;

    }

    .filter-title{
        font-size: 1rem;
        background: burlywood;
    }

    .filter-slider-value{
        font-size: 1rem;
        text-align: center;
        margin: 5px;
    }

</style>

<script>
    function fetchFullGetArray(data){
        let url = '/main/index/';

        console.log(data)
        for (let key in data){
            url += key + "=";
            for (let value in data[key])
                url +=data[key][value] + ",";
            url.slice(0,-1);
            url += "&";
            console.log(url);
        }
        console.log(url);
    }

    let data = {};
    let filterSelect = document.querySelectorAll(".filter-select");
    for (let i = 0; i < filterSelect.length; i++){
        filterSelect[i].addEventListener("change", (e) => {
            let title = e.target.parentNode.parentNode.childNodes[1].childNodes[0].childNodes[0].textContent;
            if(e.target.checked == true){
                if(!data[title])
                    data[title] = [];
                data[title].push(e.target.value)
            }

            if(e.target.checked == false){
                let delElem = data[title].indexOf(e.target.value)
                data[title].splice(delElem, 1);
            }
            fetchFullGetArray(data)

        })

    }
    let filterSlider = document.querySelectorAll(".filter-slider");
    for (let i = 0; i < filterSlider.length; i++) {
        filterSlider[i].addEventListener("change", (e) => {
            let title = e.target.parentNode.parentNode.childNodes[1].childNodes[0].childNodes[0].textContent;
            if (e.target.className == "filter-slider") {
                e.target.parentNode.previousElementSibling.childNodes[0].textContent = (e.target.value + e.target.parentNode.previousElementSibling.dataset.symbol);
            }
            data[title] = e.target.value;

            fetchFullGetArray(data)
        })
    }
</script>