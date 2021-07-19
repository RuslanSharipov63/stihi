<?php

class Cabinet 
{
    public static function getPoems()

    {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
   
    $sql = "SELECT * FROM poems ORDER BY id DESC";
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getProse()

    {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();
   
    $sql = "SELECT * FROM prose ORDER BY id DESC";
    $query = $db->query($sql);
    return $row = $query->fetchAll(PDO::FETCH_ASSOC);
    }


}