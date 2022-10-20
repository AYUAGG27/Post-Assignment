<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';   
      
    $con = mysqli_connect($host, $user, $password);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  