

<?php
include 'common.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $Insert = "INSERT INTO contact(name,email,mobile,message) VALUES('$name','$email','$mobile','$message')";
    $res = mysqli_query($conn, $Insert);
    
 if($res){
     ?>
         <script>
             alert("Registration is sucessfully submitted");
         </script>
     <?php
    }
 else{
     
     ?>
        <script>
            alert("Registration is not Sucessfull");           
        </script>  
     <?php
    }   
 } else{
     
     echo 'soory please check out your Detail !!!!!';
 }  
 
 
 
 //$conn->close();
?>
    








