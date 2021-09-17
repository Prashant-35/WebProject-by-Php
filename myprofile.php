<?php
include 'common.php';
include 'verti.php';
session_start();
?>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
        <style>
            body{
                background-color: whitesmoke;
            }
            .wrapper{
                width: 400px;
                background-color: greenyellow;
                margin: 0 auto;
                margin-top: 1%;
            }
            .container{
                margin-top: 8%;
                margin-left: 20%;
                
            }
            .container1{
                margin-top: 1%;
                margin-left: 45%;
            }
            .red{
                color: red;
            }
        </style>
    </head>
    <body>
 
        <form action="edit.php" method="POST">
        <div class="container">
        <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> MY PROFILE </h2>
                            <div class="clearfix"> </div>                            
                    </div>  
                    </div>
            </div>                    
        </div>    
           <div class="container1">
            <div class="media d-flex align-items-center">
                <?php
              echo " <img class='img-circle profile_img' src='img/".$_SESSION['pic']."' alt='crane' width='90' height='70'>";
                ?>
    </div>
                   
            </div>
          <div class="x_title">
              <h6> Welcome!! <?php echo $_SESSION['login']; ?> </h6>
                            <div class="clearfix"> </div>                            
                    </div>
        <div class="wrapper">
       <?php
       
       $detail="SELECT * FROM new WHERE email='$_SESSION[login]' AND password='$_SESSION[pass]'";
       $q=mysqli_query($conn,$detail);
       if($q==1)
        {
            while($tata = mysqli_fetch_array($q)){
            // echo 'heelo';
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
                 echo "<b>User-Id/Email-ID:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['email']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Password: <b class='red'>Not Be Shown Due To Security Reason </b></b>";
             echo "</td>";
             
             echo "<td>";
               // echo $tata['password']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Mobile No.:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['mobileno']. "<br>";
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
             
             echo "<table>";
             echo "<tr>";
             echo "<td>";
                 echo "<b>Branch:</b>";
             echo "</td>";
             
             echo "<td>";
                echo $tata['branch']. "<br>";
             echo "</td>";
             echo "</tr>";
             
             
            echo "</table>";
       }
      }
          ?>  
            
            
        </div>
        
        <div style="margin:1%">
        <button class="btn btn-primary" type="submit" name="submit-2">Edit Detail</button>       
            </div>
        
        <h6 style="color:red;"> * Note if you want to change the details please click Above Button </h6>
        </div>         
            </form> 
    </body>
</html>