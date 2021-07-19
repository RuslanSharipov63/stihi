<?php





class PoemsController
{
    
  
    public function actionIndex() 
    { 
    
    $poemscount = '';
    $poemscount = Poems::getcount();
    

   
    $poems = array ();
    $poems = Poems::getpoems();
    return require_once(ROOT . '/views/poems.php');

    }

   public function actionPage($from)
   {
    $poemscount = '';
    $poemscount = Poems::getcount();

    $pagecount = Poems::pageUri();

    $poems = array ();
    $poems = Poems::getpage($from);
    return require_once(ROOT . '/views/poems.php');
   }

}