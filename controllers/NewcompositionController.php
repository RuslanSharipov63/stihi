<?php

class NewcompositionController
{
    public static function actionIndex()
    {   

        $cabinetadmin = Login::chekadmin();
 
        require_once(ROOT . '/components/Db.php');
        $db=Db::getConnection();
        
        $title = $_POST['title'];
        $article = $_POST['article'];
        $genre = $_POST['genre'];
        
        if($title == '' || $article == '') {
            echo 'Заполните поля';
            echo '<p><a href="/cabinet">Вернуться в административную панель</a>';
        } else if($genre == 2) {
            Newcomposition::InsertPoems($title, $article);
            echo 'Запись успешно добавлена';
            echo '<p><a href="/cabinet">Вернуться в административную панель</a>';
        } else if($genre == 3)
        {
            Newcomposition::InsertProse($title, $article);
            echo 'Запись успешно добавлена';
            echo '<p><a href="/cabinet">Вернуться в административную панель</a>';
        }
        return require_once ROOT . '/views/newcomposition.php';
    }
}