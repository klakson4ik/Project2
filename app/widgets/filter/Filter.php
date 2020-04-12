<?php


namespace app\widgets\filter;


class Filter
{
    private $tpl;
    private $tplList;
    private $filterTitles;
    private $filterProducts;
    private $filterPositions;
    private $filterView;


    public function __construct()
    {
        $this->filterTitles = FilterlistModel::getFilterTitle();
        $this->filterProducts = FilterlistModel::getFilters($this->filterTitles);
        $this->filterPositions = FilterlistModel::getFilterPositions($this->filterProducts, $this->filterTitles);
        $this->filterView = FilterlistModel::getFilterView();
        $this->tplList = WIDJETS . "/filter/tpl/tpl_list.php";
        //        $this->tpl = $tpl;

    }

    public function getTplList(){
        ob_start();
        require_once $this->tplList;
        return ob_get_clean();
    }


}