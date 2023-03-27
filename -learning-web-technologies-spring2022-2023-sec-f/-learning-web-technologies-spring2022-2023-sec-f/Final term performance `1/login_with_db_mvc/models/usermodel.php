<?php 
    require_once "db.php";

    function login($user){
        $con = getConnection();
        $sql = "select * from users where name='{$user['name']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}' , '{$user['address']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editUser($user){
       
    }

    function deleteUser($user){
       
    }

    function allUser($user){
       
    }

    function getUserById($id){
       
    }
?>