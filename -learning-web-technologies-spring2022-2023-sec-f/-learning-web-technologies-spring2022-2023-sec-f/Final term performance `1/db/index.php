<?php 

    $con = mysqli_connect('localhost', 'root', '', 'prd');
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    //print_r($result);
    //$user = mysqli_fetch_assoc($result);
    //print_r($user);
    
    while($row = mysqli_fetch_assoc($result)){
        print_r($row); echo "<br>";
    }


?>