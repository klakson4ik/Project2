<?php


namespace app\widgets\filter;


class Filter
{
    private $tpl;
    private $tplList;
    private $titleFilter;
    private $filters;


    public function __construct()
    {
        $this->titleFilter = FilterlistModel::getFilterTitle();
        $this->filters = FilterlistModel::getFilters($this->titleFilter);
        $this->tplList = WIDJETS . "/filter/tpl/tpl_list.php";
        //        $this->tpl = $tpl;

    }

    public function getTplList(){
        ob_start();
        require_once $this->tplList;
        echo ob_get_clean();
    }


}