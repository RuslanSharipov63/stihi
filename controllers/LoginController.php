<?php


class LoginController
{
    public function actionIndex()
    { 
       
        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
        

         $errors = '';
         $cabinetadmin = Login::checkLogin($email, $password);
         
        
         if($cabinetadmin == false)
         {
            $errors = 'Невверные данные для входа в административный кабинет';
           
         } else {
             Login::auth($cabinetadmin);
             header("Location: /cabinet");
          
         } 
      
        }
        
         require_once (ROOT . '/views/login.php');
         return true;
    } 


}