<?php
include "connection.php";
session_start();


if(isset($_POST['submit'])){

    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $_SESSION['success'] = "";

    $usersearch = "SELECT * FROM admin WHERE userid='$userid' AND  password='$password' limit 1";
    $query = mysqli_query($conn,$usersearch);

    $user_count = mysqli_num_rows($query);
    
    if($user_count==1){
        $hhh = "SELECT * FROM admin WHERE userid='$userid'AND  password='$password' ";
        $hello = mysqli_query($conn, $hhh);
        
        while($tata = mysqli_fetch_array($hello))
        {
            $_SESSION['login_user'] = $_POST['userid'];
            //echo 'hello';
             
            //echo "<h3> user id :</h3>". $tata['email']. "<br>";
            //echo "<h3> Password :</h3>".$tata['password']. "<br>";
            header("location: dasboard admin.php");
            
            
        }
    }
    else {
        ?>
        <script>
            alert("Login is not Sucessfull");           
        </script>  
     <?php
    }

}

 else {
    ?>
        <script>
            alert("Invalid Credential !!!!");           
        </script>  
     <?php
}
?>

