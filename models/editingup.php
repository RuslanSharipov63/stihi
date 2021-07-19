<?php

class Editingup
{
    public static function updateProse($id)
    {
    require_once(ROOT . '/components/Db.php');
    $db = Db::getConnection();

    if(isset($_POST['title']) AND  isset($_POST['article']) ) {
        $title = $_POST['title'];
        $article = $_POST['article'];
    }

    $sql = "UPDATE prose SET  title = :title, article = :article WHERE id = :id";
    $query = $db->prepare($sql);
    return  $query->execute(['title'=>$title, 'article'=>$article, 'id'=>$id]);
    }

}