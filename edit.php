<?php
include 'verti.php';
include 'commom.php';
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
    <p class="bg-primary text-white p-2"> Send Edit Request </p>
</div>
        
        
        <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Enter the Detail</h2>
                            <div class="clearfix"> </div>
                    </div>
                    </div>
            </div> 
            </div>  
        
     
        <form class="needs-validation" novalidate action="" method="POST">
            <div class="form-row">
    <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">First Name*</label>
      <input type="text" name="firstname" class="form-control" id="validationTooltip01"  value="<?php echo $_SESSION['name'];?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last Name*</label>
      <input type="text" name="lastname" class="form-control" id="validationTooltip02" value="<?php echo $_SESSION['pass'] ;?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
                
     <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">Email-Id*</label>
      <input type="text" name="email" class="form-control" id="validationTooltip01"  value="<?php echo $_SESSION['login'];?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
                <div class="col-md-4 mb-3"">
      <label for="validationTooltip01">Password*</label>
      <input type="text" name="password" class="form-control" id="validationTooltip01"  value="<?php echo 'Please enter Your Password';?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
              <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">Mobile No.*</label>
      <input type="text" name="mobileno" class="form-control" id="validationTooltip01"  value="<?php echo $_SESSION['login'];?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
                <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Roll NO.*</label>
      <input type="text" name="rollno" class="form-control" id="validationTooltip01"  value="<?php echo $_SESSION['login']?>"required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
                <div class="col-md-4 mb-3" style="margin-left: 12%;">
      <label for="validationTooltip01">Branch*</label>
      <input type="text" name="branch" class="form-control" id="validationTooltip01"value="<?php echo $_SESSION['login'];?>" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
      
  </div>
            <button class="btn btn-primary" type="submit" name="submit-1">Save</button>
</form>
        </div>
        
           
    </body>
</html>

