<?php 

    $db_host = 'localhost';
    $db_name = 'prd table';
    $db_pass = '';
    $db_user = 'root';

    function getConnection(){
        global $db_host;
        global $db_name;
        global $db_user;
        global $db_pass;
        
        return $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    }

?>