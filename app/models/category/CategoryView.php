<?php


namespace app\models\category;


use app\models\AppModel;

class CategoryView extends  AppModel
{
    private $IDs;
    private $view;

    public function __construct($IDs)
    {
        $this->IDs = $IDs;
        $this->view = $this->getCategoryViewDB();

    }

    private function getCategoryViewDB(){
        return CategoryDB::getDBCategoryView($this->IDs);
    }

    public function getCategoryView(){
        return $this->view;
    }


}