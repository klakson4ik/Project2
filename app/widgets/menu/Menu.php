<?php


namespace app\widgets\menu;
use vendor\core\libs\Cache;
use vendor\core\libs\DB;


class Menu
{
    private $tree;
    private $menuHtml;
    private $tpl;
    private $container = 'ul';
    private $table = 'category';
    private $cache = 3600;
    private $cacheKey = 'project2';
    private $attrs = [];
    private $prepend = '';

    public function __construct()
    {
        $this->tpl = __DIR__. '/menu_tpl/menu_tpl.php';
//        $this->getOptions($options);
        $this->run();
//        $this->getTree();

    }

    private function getOptions()
    {
        foreach ($options as $key=>$val)
            if (property_exists($this, $key))
                $this->$key = $val;
    }

    private function output()
    {
//        debug($this->menuHtml);
          echo $this->menuHtml;
    }

    private function run()
    {
//        $this->menuHtml = Cache::getCache($this->cacheKey);
//        if (!$this->menuHtml)
//        {
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);
//            Cache::setCache($this->cacheKey, $this->menuHtml, $this->cache);
//        }
//        debug($this->menuHtml);
        $this->output();

    }

    private function  getTree()
    {
        $tree = [];
        $data = DB::getAssoc("SELECT * FROM `$this->table`");
        foreach ($data as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $data[$node['parent_id'] - 1]['childs'][$id] = &$node;
        }
        return $tree;
    }

    private function getMenuHtml($tree, $tab = '')
    {
        $str = '';
        foreach ($tree as $id => $category)
        {
            $str .= $this->catToTamplate($category, $tab, $id);
        }
//        debug($str);
        return $str;
    }

    private function catToTamplate($category, $tab, $id)
    {
//        ob_start();
        require $this->tpl;
//        return ob_get_clean();
    }
}