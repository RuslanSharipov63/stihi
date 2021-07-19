<?php



class ProseController
{
    public function actionIndex() 
    { 

    $prosescount = '';
    $prosecount = Prose::getcount();
    


    $prose = array ();
    $prose = Prose::getprose();
    return require_once(ROOT . '/views/prose.php');

    }



    public function actionPage($from)
    {
     $prosecount = '';
     $prosecount = Prose::getcount();
 
   
     $prose = array ();
     $prose = Prose::getpage($from);
     return require_once(ROOT . '/views/prose.php');
    }

}