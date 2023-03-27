<?php 
    session_start();
    require_once '../models/usermodel.php';

    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['name']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email']; 
        $address = $_REQUEST['address']; 

        if($username == "" && $password == "" && $email == "" && $address == "") {
            echo "Null value ..";
        }else{
            $user = ['name'=>$name, 'password'=>$password, 'email'=>$email, 'address'=>$address,]

           $status = addUser($user);
           
            if($status){
                header('location: ../views/login.php');
            }
            else{
                echo "DB error, please try again...";
            }
       }
        
    }else{
        echo "invalid request...";
    }
?>

