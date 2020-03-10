<?php


namespace app\models\category;


use app\models\AppModel;
use app\models\category\CategoryView;

class CategoryTree extends  AppModel
{
    private $categoryID;
    private $catID = [];
    private $tree;

    public function __construct($alias)
    {
        $this->tree = $this->getTree();
        $this->categoryID = $this->getCategoryID($alias);
        $this->reverseArr($this->categoryID);

    }

    private function  getTree()
    {
        $tree = CategoryDB:: getDBCategoryTree();
        return $tree;
    }

    private function getCategoryID($alias){
        $id = null;
        foreach($this->tree as $value){
            if($value['alias'] == $alias){
                $id = $value['id'];
                break;
            }
        }
        return isset($id) ? $id : false;
    }

    private function reverseArr($id){
        foreach ($this->tree as $key=>$value){
            if(empty($this->catID)) {
                $this->catID[] = $id;
            }

            if($value['parent_id'] == $id){
                $this->catID[] = $value['id'];
                $this->reverseArr($value['id']);
            }

        }
    }


    public function getCatId()
    {
        return $this->catID;
    }



}