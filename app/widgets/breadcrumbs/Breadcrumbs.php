<?php


namespace app\widgets\breadcrumbs;


class Breadcrumbs
{
    public static function getBreadcrumbs($id, $currentItem = ''){

        $breadCrumbs = BreadcrumbsModel::getBreadcrumbs($id);
        $breadCrumbsView = BreadcrumbsView::getHtml(WIDJETS . '/breadcrumbs/BreadcrumbsTemplate.php', $breadCrumbs, $currentItem );
        return $breadCrumbsView;

    }
}