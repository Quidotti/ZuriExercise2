<?php
session_start();

require_once "database.php";

    $errors = array();
    $name = "";
    $email = "";

    if(isset($_POST['login'])){
//   $name = $email = $pasword = $pwd =""; 

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email)){

            $errors['email'] = "Sorry email is require";
        }

        if(empty($password)){

            $errors['password'] = "Sorry Password is required";

        }

        if(count($errors)===0){

        $sql = "SELECT * FROM users WHERE email =? OR name = ? LIMIT 1";
        $statement=$conn->prepare($sql);
        $statement->bind_param('ss', $email, $name);

        $statement->execute();
        $result=$statement->get_result();

        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){

            // Logged user in succesffuly

            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            //  set flash messages
            $_SESSION['message'] = "Login Successful";
            $_SESSION['alert-class'] =  "success";
            
            header("Location: ../dashboard.php");
            exit;

        }else{

                $errors['LoginFail']=" Wrong Credentials";
        }

        }

       
    }



?>