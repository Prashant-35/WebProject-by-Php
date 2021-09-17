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
    <p class="bg-primary text-white p-2"> Send Return Book Request </p>
</div>
        
        
        <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Enter the book</h2>
                            <div class="clearfix"> </div>
                    </div>
                    </div>
            </div> 
            </div>            
        
        <form class="needs-validation" novalidate  action="" method="POST">
            <div class="form-row">
    <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">Book Name</label>
      <input type="text" name="bookname" class="form-control" id="validationTooltip01" placeholder="Book name" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Author Name</label>
      <input type="text" name="authorname" class="form-control" id="validationTooltip02" placeholder="Author Name" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
                
  </div>
            <button class="btn btn-primary" type="submit" name="submit5">Send Request</button>
</form>
        </div>
    </body>
</html>


<?php

if(isset($_POST['submit5'])){
    
    if(isset($_SESSION['login']))
    {    
    $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
    $authorname = mysqli_real_escape_string($conn, $_POST['authorname']);
    $Insert = "INSERT INTO returnbook VALUES('$_SESSION[login]','$bookname','$authorname','','','')";
    $resq = mysqli_query($conn, $Insert);
    
    }

    if($resq){
     ?>
         <script>
             alert("Book Return request is sucessfully send");
         </script>
     <?php
    }
 else{
     
     ?>
        <script>
            alert("Please send it Again");           
        </script>  
     <?php
    }   
}else{
     
     echo 'soory please check out your Detail !!!!!';
 }  
 
 ?>

