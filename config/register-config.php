<?php

session_start();

require_once "database.php";

    $errors = array();
    $name = "";
    $email = "";

    if(isset($_POST['submit'])){
//   $name = $email = $pasword = $pwd =""; 

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $confirmPass = $_POST['c_pass'];

        if(empty($name)){

            $errors['name'] = "Sorry name is require";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            $errors['email'] = "Sorry email is invalid";
        }
        
        if(empty($email)){

            $errors['email'] = "Sorry email is require";
        }

        if(empty($password)){

            $errors['password'] = "Sorry Password is required";

        }

        if($password !=$confirmPass){

            $errors['password'] = "Sorry Password do not match";
        }


            $emailQuery = "SELECT * FROM users WHERE email =? LIMIT 1";

            $statement = $conn->prepare($emailQuery);
            $statement->bind_param('s', $email);
            $statement->execute();
            
            $result = $statement->get_result();
            $userCount=$result->num_rows;

            if($userCount>0){
                $errors['email'] = "Email Already exists";
            }


    if(count($errors)===0){

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(name, email, password) VALUES(?, ?, ?)";

         $statement = $conn->prepare($sql);
         $statement->bind_param('sss', $name, $email, $password);
         
         
         if($statement->execute()){
            //  Login user infor

            $userId = $conn->insert_id;

            $_SESSION['id'] = $userId;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            //  set flash messages

            $_SESSION['message'] = "Registration Successful";
            $_SESSION['alert-class'] =  "success";

            header("Location: ../index.php");
            exit;

         }else{

             $error['db_error'] = "Database Error: Fail to register user";

         }

    }

}

    if(isset($_GET['logout'])){

        session_destroy();
        unset_session['id'];
        unset_session['name'];
        unset_session['email'];
        header("Location: login.php");
        exit();
    }


?>