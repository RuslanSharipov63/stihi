<?php

class AdminController 
{
    public function actionIndex()
    {
        return require_once ROOT . '/views/admin.php';
    }
}