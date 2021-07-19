<?php

class Edit 
{
    public static function setEdit($id)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $sql = 'SELECT * FROM poems WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(['id' => $id]);
        return $editpoems = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}