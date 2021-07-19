<?php

class CabinetController
{
        public function actionIndex()
        {

      
         
          $cabinetadmin = Login::chekadmin();
          
          $outPoems = array();
          $outPoems = Cabinet::getPoems();

          $outProse = array();
          $outProse = Cabinet::getProse();


          require_once (ROOT . '/views/cabinet.php');
          return true;   
          
         
        
    }
   
     

        }
