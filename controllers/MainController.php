<?php

class MainController
{
    public function actionIndex() 
    {
        return require_once ROOT . '/views/main.php';
    }
} 