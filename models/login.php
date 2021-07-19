<?php



class Login 
{
  
  


    public static function checkLogin($email, $password)
    {

      

        $db = Db::getConnection();
        $sql = 'SELECT * FROM admin WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result -> bindParam(':email', $email, PDO::PARAM_STR);
        $result -> bindParam(':password', $password, PDO::PARAM_STR);
        $result -> execute();
        $cabinet = $result->fetch();
        

        if($cabinet) {
            return $cabinet['email'];
        } else {
            return false; 
        }
    
    }


    public static function auth($cabinetadmin)
    {
        session_start();
        $_SESSION['email'] = $cabinetadmin;
    }

    public static function chekadmin()
    {
        if($_SESSION['email']) {
            return $_SESSION['email'];
        } else {
            header("Location: /login");
        }
    }
   
}