<?php
class AddController 
{
    public static function actionIndex()
    {
        $cabinetadmin = Login::chekadmin();
        return require_once ROOT . '/views/add.php';
    }

    
}