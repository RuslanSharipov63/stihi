<?php

class EditingupController 
{
    public function actionIndex($id)
    {

        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();


        $poemsUpdate = array ();
        $poemsUpdate = Editingup::updateProse($id);

        $poems = array ();
        $poems = Editing::setEditing($id);
        header('Location: /cabinet');
        return require_once ROOT . '/views/editing.php';
       
    }
}