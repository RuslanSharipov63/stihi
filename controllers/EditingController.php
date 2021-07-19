<?php

class  EditingController 
{
    public static function actionIndex($id)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $cabinetadmin = Login::chekadmin();

        $poems = array ();
        $poems = Editing::setEditing($id);
        return require_once(ROOT . '/views/editing.php');
    }
}