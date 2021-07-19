<?php

class Prose
{


   public static function getcount() {
    
      $pagecount = 2;
      require_once(ROOT . '/components/Db.php');
      $db = Db::getConnection();
      $sql = "SELECT * FROM prose";
      $query = $db->query($sql);
      $rowcount = $query->fetchAll(PDO::FETCH_ASSOC);
      $rowcounter = count($rowcount);
      return $counter = ceil($rowcounter/$pagecount);
       
   
   }



   public static function getprose()
   {

    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();

 

    $sql = 'SELECT * FROM prose ORDER BY id DESC LIMIT  0, 2';
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
  
   
   }


   public static function getpage($page) 
   {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
   
    $pagecount = 2;
    
    $from = ($page - 1) * $pagecount;

    $sql = "SELECT * FROM prose ORDER BY id DESC LIMIT $from, $pagecount";
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
   }
 
}