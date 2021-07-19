<?php
  
class Poems
{
   
 

  public static function getcount() {
    
    $pagecount = 2;
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
    $sql = "SELECT * FROM poems";
    $query = $db->query($sql);
    $rowcount = $query->fetchAll(PDO::FETCH_ASSOC);
    $rowcounter = count($rowcount);
    return $counter = ceil($rowcounter/$pagecount);
     
 
 }

   public static function getpoems()
   {
  
   
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
   
    $sql = "SELECT * FROM poems ORDER BY id DESC LIMIT 0, 2";
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
  
 
   }

   

  public static function pageUri()
  {
    $pageUri = $_SERVER['REQUEST_URI'];
    $pageArr = explode('/', $pageUri);
     $pageEnd = count($pageArr) - 1;
    return $pageArr[$pageEnd];
  }



   public static function getpage($page) 
   {

    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
   
    $pagecount = 2;
    
    $from = ($page - 1) * $pagecount;

    $sql = "SELECT * FROM poems ORDER BY id DESC LIMIT $from, $pagecount";
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
   }


 
}
 