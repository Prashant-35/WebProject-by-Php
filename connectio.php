<?php
 include 'common.php';

 
 if(isset($_POST['submit'])){
     
     $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
     $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
     $rollno = mysqli_real_escape_string($conn,$_POST['rollno']);
     $branch = mysqli_real_escape_string($conn,$_POST['branch']);
     $pic = mysqli_real_escape_string($conn,$_POST['pic']);
    
     //$password = md5($pass);
     //$pass = password_hash($password, PASSWORD_BCRYPT);
     
     //Declaring the session Variable 
     
     
     
     //insertion of database
     $Insert = "INSERT INTO new(firstname,lastname,email,password,mobileno,rollno,branch,pic) VALUES('$firstname','$lastname','$email','$password','$mobileno','$rollno','$branch','$pic')";
     
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
 }   else{
     
     echo 'soory please check out your Detail !!!!!';
 }  
 
 
 //$conn->close();
?>