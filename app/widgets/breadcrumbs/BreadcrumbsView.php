<?php


namespace app\widgets\breadcrumbs;


class BreadcrumbsView
{
    public static function getHtml($tpl, $data, $currentItem)
    {
        ob_start();
        require_once $tpl;
        return ob_get_clean();

    }
}