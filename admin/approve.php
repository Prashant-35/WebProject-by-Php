<?php
include 'verti.php';
include 'connection.php';

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
    <p class="bg-primary text-white p-2"> Approve the Book </p>
    
    
   <form class="needs-validation" novalidate action="" method="POST">
            <div class="form-row">
    <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">Enter Yes/NO</label>
      <input type="text" name="approve" class="form-control" id="validationTooltip01" placeholder="yes/no" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">Issue Date</label>
      <input type="text" name="issue" class="form-control" id="validationTooltip02" placeholder="yyyy-mm-dd" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
            </div> 
       <div class="form-row"> 
      <div class="col-md-4 mb-3" style="margin-left:12%;"> 
      <label for="validationTooltip03">Return Date</label>
      <input type="text" name="return" class="form-control" id="validationTooltip03" placeholder="yyyy-mm-dd" required="">
      <div class="invalid-tooltip">
        Please provide a valid Publisher Name.
      </div>
    </div>
        </div>
       <div style="margin-right: 67%;">
        <button class="btn btn-primary" type="submit" name="submit4">Approve</button>
       </div>
    </form>
  
  
    
</div>
</div>
    
       <?php
  if(isset($_POST['submit4']))
  {
    mysqli_query($conn,"UPDATE  `issuebook` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `return` =  '$_POST[return]' WHERE username='$_SESSION[name]' and bookname='$_SESSION[bkname]';");

    mysqli_query($conn,"UPDATE book SET quantity = quantity-1 where bookname='$_SESSION[bkname]' ;");

    $res=mysqli_query($conn,"SELECT quantity from book where bookname='$_SESSION[bkname];");

    while($row=mysqli_fetch_assoc($res))
    {
      if($row['quantity']==0)
      {
        mysqli_query($conn,"UPDATE book SET status='not-available' where bookname='$_SESSION[bkname]';");
      }
    }
    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="requestissue.php";
      </script>
    <?php
  }
?>
  
        
   </body>
</html>

    