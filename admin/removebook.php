<?php 

include 'verti.php';
include 'connection.php'
?>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Add Book</title>
        <style>
            .container{
                margin-top: 8%;
                margin-left: 18%;
            }
        </style>
    </head>
    <body>  
        
<div class="container">
<div class="mx-5 mt-5 text-center">
    <div style="margin-bottom: 1%; margin-left: 650px;">
   
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2" name="pubid" type="search" placeholder="Enter the Pub. ID">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit1" style="margin-top: 10%;" >Delete Book</button>
    </form>
                    </div>
    <p class="bg-primary text-white p-2"> List of Book Availiblity </p>
    
    
    
    <?php
     $hhh = "SELECT * FROM book";
     $result=$conn->query($hhh);
     if($result->num_rows > 0){
         echo '
             <table class="table">
             <thead>
                <tr>
                <th scope="col"> Serial No. </th>
                <th scope="col"> Book Name </th>
                <th scope="col"> Author Name </th>
                <th scope="col"> Pub Name </th>
                <th scope="col"> Pub Id </th>
                <th scope="col"> Quantity </th>
                </tr>
             </thead>
             <tbody>';
                while($tata = $result->fetch_assoc())
                {
               echo '<tr>';
                 echo '<td>'.$tata["serialno"]. '</td>';
                 echo '<td>'.$tata["bookname"]. '</td>';
                 echo '<td>'.$tata["authorname"]. '</td>';
                 echo '<td>'.$tata["pubname"].'</td>';
                 echo '<td>'.$tata["pubid"].'</td>';
                 echo '<td>'.$tata["quantity"].'</td>';
                 echo '</tr>';
             
             }
             echo '</tbody>
         </table>
         ';
         
     }
     
    ?>
    
</div>
     
    
                    
               
   
</div>
       
    </body>
</html>

        
       
<?php

if(isset($_POST['submit1']))
{
    
    
    $pubid = mysqli_real_escape_string($conn, $_POST['pubid']);
    $drop = mysqli_query($conn, "DELETE FROM book where pubid = '$_POST[pubid]';" );
    if($drop){
     ?>
         <script>
             alert("Book is sucessfully Deleted");
         </script>
     <?php
    }
 else{
     
     ?>
        <script>
            alert("Book deleting is not Sucessfull");           
        </script>  
     <?php
    }   
 } else{
     
     echo 'soory please check out your Detail !!!!!';
 }  
 
 ?>

