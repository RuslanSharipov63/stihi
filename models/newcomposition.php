<?php

class Newcomposition 
{
    public static function InsertPoems($title, $article)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $sql='INSERT INTO poems(title, article) VALUES(:title, :article)';
        $query = $db->prepare($sql);
        $query->execute(['title'=>$title, 'article'=>$article]);

        
    }


    public static function InsertProse($title, $article)
    {
        require_once(ROOT . '/components/Db.php');
        $db = Db::getConnection();

        $sql='INSERT INTO prose(title, article) VALUES(:title, :article)';
        $query = $db->prepare($sql);
        $query->execute(['title'=>$title, 'article'=>$article]);
        
    }

}