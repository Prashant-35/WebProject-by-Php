<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Registration</title>
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
    background-image: linear-gradient( 135.9deg,  rgba(109,25,252,1) 16.4%, rgba(125,31,165,1) 56.1% );
    opacity: 0.8;
    background-size: cover;
    margin-top: 70px;
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
            <form class="form-horizontal" role="form" action="admin db.php" method="POST">
                <h2>Registration</h2>
                
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label"> Name*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Name" class="form-control"  name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email"  placeholder="Email" class="form-control" name= "email" required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Emp.Id*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Employee id " class="form-control"  name="userid"required>
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




