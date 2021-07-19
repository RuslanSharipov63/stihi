<?php

class DeleteproseController
{
    public function actionIndex($id)
    {
        

     if(Delete::deleteProse($id)) {
      header('Location: /cabinet');
     } else {
         require_once (ROOT . 'views/cabinet.php');
     }
      return true;
         
    }



}