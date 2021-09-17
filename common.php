<?php

//Database connection through server

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "account";

$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

//Connection check

 if($conn){
     //echo "connection sucessfully";
     ?>
     <script>
        // alert("connection successfull");
         </script>
     <?php
 } 
 else {
     //echo 'Please connect it';
     die("no connection" . mysqli_connect_error());
     
}


//$conn->close();
?>

