<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<style>
    body {
     background: url('img/fo6.jpg') fixed;
     opacity: 0.8;
    background-size: cover;
    margin-top: 30px;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
</style>
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" role="form" action="connectio.php" method="POST">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="First Name" class="form-control"  name="firstname"required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Last Name" class="form-control"  name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email"  placeholder="Email" class="form-control" name= "email" required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password"  placeholder="Password" class="form-control" name= "password" required >
                    </div>
                </div>
                
               
                <div class="form-group">
                    <label for="mobileno" class="col-sm-3 control-label">Mobile No* </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" placeholder="Phone number" class="form-control" name= "mobileno" required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Roll No" class="col-sm-3 control-label">Roll NO* </label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Please write your Roll No" class="form-control" name="rollno" required>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="Branch" class="col-sm-3 control-label">Branch* </label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Please write your Branch" class="form-control" name="branch" value="cse" required >
                    </div>
                </div>
                <div class="form-group">
                        <label for="pic" class="col-sm-3 control-label">Profile Image* </label>
                    <div class="col-sm-9">
                        <input type="file" placeholder="" class="form-control" name="pic" value="" required >
                    </div>
                </div>
                 <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div><div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">SUBMIT</button> </div>
            </form> <!-- /form -->
        </div> 
    </body>
    <script>
        $(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
			}
			
	});
});
        
    </script>
</html>


