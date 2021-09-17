<?php
include 'verti.php';
include 'connection.php';
session_start();
?>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Request Book</title>
        <style>
            .container{
                margin-top: 8%;
                margin-left: 18%;
            }
        </style>
    </head>
    <body>
        <div class="conatiner">
        <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Book Details</h2>
                            <div class="clearfix"> </div>
                    </div>
                    </div>
            </div> 
            </div>    
<div class="container1">
<div class="mx-5 mt-5 text-center">
    <div  style="margin-bottom: 1%; margin-left: 450px;">
   
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2" name="username" type="search" placeholder="Enter the User Name /Id" required="">
            <input class="form-control mr-sm-2" name="bookname" type="search" placeholder="Enter the Book Name" required="">
            
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit4" style="margin-top: 10%;" >Return Book</button>
    </form>
                    </div>
    <p class="bg-primary text-white p-2"> List of Book Request </p>
    <?php
     $hhh = "SELECT * FROM returnbook";
     $result=$conn->query($hhh);
     if($result->num_rows > 0){
         echo '
             <table class="table">
             <thead>
                <tr>
                <th scope="col"> USER ID </th>
                <th scope="col"> Book Name </th>
                <th scope="col"> Author Name </th>
                <th scope="col"> Issue </th>
                <th scope="col"> Return </th>
                <th scope="col"> Approve </th>
                
                
                
                </tr>
             </thead>
             <tbody>';
                while($tata = $result->fetch_assoc())
                {
               echo '<tr>';
                 echo '<td>'.$tata["username"]. '</td>';
                 echo '<td>'.$tata["bookname"]. '</td>';
                 echo '<td>'.$tata["authorname"]. '</td>';
                 echo '<td>'.$tata["issue"].'</td>';
                 echo '<td>'.$tata["return"].'</td>';
                 echo '<td>'.$tata["approve"].'</td>';
                 
                 echo '</tr>';
             
             }
             echo '</tbody>
         </table>
         ';
         
     }
     
    ?>
</div>  
</div>
        <?php
if(isset($_SESSION['login_user']))
	{
		$sql = "SELECT new.email,book.bookname FROM new inner join returnbook ON new.email=returnbook.username inner join book ON returnbook.bookname=book.bookname WHERE returnbook.approve = ''";
		$res= mysqli_query($conn,$sql);

			
        }
        else{
            echo 'Enter Correct Details';
        }
        
        ?>
<?php

if(isset($_POST['submit4']))
	{
                
		$_SESSION['name']=$_POST['username'];
                $_SESSION['bkname']=$_POST['bookname'];
		?>
			<script type="text/javascript">
				window.location= "approve re.php";
			</script>
		<?php
	}
	?>
        </div>
    </body>
</html>
