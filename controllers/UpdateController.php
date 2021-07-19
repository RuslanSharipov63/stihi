<?php

class UpdateController 
{
    public function actionIndex($id)
    {

        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();


        $poemsUpdate = array ();
        $poemsUpdate = Update::updatePoems($id);

        $poems = array ();
        $poems = Edit::setEdit($id);
        header('Location: /cabinet');
        return require_once ROOT . '/views/edit.php';
       
    }
}