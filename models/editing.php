<?php

class Editing 
{
    public static function setEditing($id)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $sql = 'SELECT * FROM prose WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $id]);
        return $editpoems = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}