
<?php
include "common.php";
session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $emailsearch = "SELECT * FROM new WHERE email='$email' AND  password='$pass' limit 1";
    $query = mysqli_query($conn,$emailsearch);    
    $email_count = mysqli_num_rows($query);
    
    //$row = mysqli_fetch_assoc($emailsearch);
    
    if($email_count==1){
        $_SESSION['login'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['password'];
        $_SESSION['image'] = $row['pic'];
        
        $hhh = "SELECT * FROM new WHERE email='$email'AND  password='$pass' ";
        $hello = mysqli_query($conn, $hhh);
        
        header("location: dasboard user.php");
        
       
        
        
        //while($tata = mysqli_fetch_array($hello))
        /*{
            echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>First Name :</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['firstname']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Last Name :</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['lastname']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>User-Id:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['email']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Password:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['password']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Roll No.:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['rollno']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             
            echo "</table>";
            //echo "<h3> user id :</h3>". $tata['email']. "<br>";
            //echo "<h3> Password :</h3>".$tata['password']. "<br>";
            //header('location:admin/dashboard admin.php');
            
            echo "<a href=login.php> ";
            echo "<button type='button' class='btn btn-danger'>Logout</button>";
            echo "</a>";
        }*/
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
