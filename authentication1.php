<?php      
    include('connection1.php');  
    $username = $_POST['first'];  
    $password = $_POST['last'];  
    $password = $_POST['email_id'];  
      
          
        $firstname = stripcslashes($firstname);  
        $lastname = stripcslashes($lastname);  
        $email_id = stripcslashes($email_id);  
        $firstname = mysqli_real_escape_string($con, $firstname);  
        $lastname = mysqli_real_escape_string($con, $lastname);  
        $email_id = mysqli_real_escape_string($con, $email_id);  
      
        $sql = "select *from login where first = '$firstname' , lastname = '$lastname' , $email_id = 'email_id';  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid</h1>";  
        }     
?>  