<?php      
    $host = "localhost";  
    $Firat = "root";  
    $Last = '';  
    $Email_id = '';  
      
    $con = mysqli_connect($host, $first, $last, $email_id);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 