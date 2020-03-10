<?php


namespace app\widgets\pagination;


class Pagination
{
    public function getPagination($perpage, $array){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = new PaginationModel($page, $perpage, $array);
        $pages = $pagination->getPage($array);
        $paginationView = new PaginationView($pagination->getCurrentPage(), $pagination->getCountPages(), $pagination->getUri());
        $view = $paginationView->getHtml();

        return ['pages' => $pages, 'view' => $view];

    }
}