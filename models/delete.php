<?php

class Delete 
{
    public static function deletePoems($id) 
    {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();


    $sql = 'DELETE FROM poems WHERE id=?';
    $query = $db->prepare($sql);
    return $query->execute([$id]);
   

    }

    public static function deleteProse($id) 
    {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();


    $sql = 'DELETE FROM prose WHERE id=?';
    $query = $db->prepare($sql);
    return $query->execute([$id]);
   

    }
}