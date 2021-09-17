<?php
 include 'connection.php';
 
 
 if(isset($_POST['submit'])){
     
     
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $userid = mysqli_real_escape_string($conn, $_POST['userid']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
  
    
     //$password = md5($pass);
     //$pass = password_hash($password, PASSWORD_BCRYPT);
    
     $Insert = "INSERT INTO admin(name,email,userid,password,mobileno) VALUES('$name','$email','$userid','$password','$mobileno')";
    
     $res = mysqli_query($conn,$Insert);
 
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
