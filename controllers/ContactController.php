<?php

class ContactController 
{
    public function actionIndex()
    {
        return require_once ROOT . '/views/contact.php';
    }
}