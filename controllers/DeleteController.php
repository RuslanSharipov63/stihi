<?php

class DeleteController
{
    public function actionIndex($id)
    {
        

     if(Delete::deletePoems($id)) {
      header('Location: /cabinet');
     } else {
         require_once (ROOT . 'views/cabinet.php');
     }
      return true;
         
    }



}