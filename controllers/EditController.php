<?php

class  EditController 
{
    public static function actionIndex($id)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $cabinetadmin = Login::chekadmin();

        $poems = array ();
        $poems = Edit::setEdit($id);
        return require_once(ROOT . '/views/edit.php');
    }
}