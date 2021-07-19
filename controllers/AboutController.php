<?php


class AboutController 
{
    public function actionIndex()
    {
        return require_once ROOT . '/views/about.php';
    }
}