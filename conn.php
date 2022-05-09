<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    //echo 'thành công';
}
?>
<?php

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $username = $_POST['user'];
        $pass = $_POST['pass'];
    
     
        $sql_nhap = mysqli_query($mysqli,"INSERT INTO user (email, username, pass) VALUES ('$email', '$username', '$pass')");
        
    }
   
    
?>