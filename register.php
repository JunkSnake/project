<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('db.php');
$login=$_POST['login'];
$password=$_POST['password'];
$repeat_password=$_POST['passwordR'];

$sql= "INSERT INTO `user` (login,password) VALUES ('$login','$password')";

if (empty($login) || empty($password) ||empty($repeat_password))
{
    header("Location: registration.php?error=Заполнены не все поля");
    exit;
}else{
    if($password!=$repeat_password){
        header("Location: registration.php?error=Пароли не совпадают");
        exit;
            }else{ 
                if (strlen($password) >= 8) 
                {
                    if (preg_match('/^[a-zA-Z0-9]+$/', $password))
                    {
                        $sql= "INSERT INTO `user` (login,password) VALUES ('$login','$password')";
                    }
                    else{
                        
                        header("Location: registration.php?error=Пароль имеет недопустимые символы");
                        exit;
                        }
                        if($conn -> query($sql) === true)
                        {
                            header("Location: index.php?success=Вы успешно зарегистрированны");
                            exit;
                        } 
                        else{echo "Ошибка: ". $conn->error;}
                            }else{
                                header("Location: registration.php?error=Пароль должен содержать как минимум 8 символов");
                                exit;
                                }
                }
        }


?>