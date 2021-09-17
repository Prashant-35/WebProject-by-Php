<?php
include 'common.php';
include 'nav.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>user Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        
        body {
  /*background: #599fd9;*/
  /*background-image: linear-gradient( 135.9deg,  rgba(109,25,252,1) 16.4%, rgba(125,31,165,1) 56.1% );*/
  min-height: 100vh;
  overflow-x: hidden;
  
}

.container{
    margin-left: 24%;
    width: 100%;
    text-align: center;
    margin-top: 5%;
}
.container1{
    margin-left: 20%;
    width: 80%;
    
}
 .vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
  margin-top: 3%;
}
.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
} 

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}
.text-gray {
  color: #aaa;
}
.nav-link{
    text-transform: capitalize;
}
.nav-link:hover{
    background:#f3f2f2;
}
.text-primary{
    color:#7579e7 !important;
}
@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}

    </style>
    <script>
    $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});


    </script>
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
        <img loading="lazy" src="img/avtar.png" alt="..." width="50" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0"></h4>
        <p class="font-weight-normal text-muted mb-0"><?php echo $_SESSION['login'];?> </p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
        <a href="dasboard admin.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
    </li>
    <li class="nav-item">
        <a href="myprofile.php" class="nav-link text-dark">
                <i class="fa fa-user  mr-3 text-primary fa-fw"></i>
                My Profile
            </a>
    </li>
    <li class="nav-item">
        <a href="bookrequest.php" class="nav-link text-dark">
                <i class="fa fa-plus mr-3 text-primary fa-fw"></i>
                Book Request
            </a>
    </li>
    <li class="nav-item">
        <a href="returnbook.php" class="nav-link text-dark">
                <i class="fa fa-archive mr-3 text-primary fa-fw"></i>
                Return Book
            </a>
    </li>
    <li class="nav-item">
        <a href="pdf.php" class="nav-link text-dark">
                <i class="fa fa-list-alt mr-3 text-primary fa-fw"></i>
                PDF Online
            </a>
    </li>
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Services</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
        <a href="login.php" class="nav-link text-dark">
                <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                Logout
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-envelope mr-3 text-primary fa-fw"></i>
                Email Reciept
            </a>
    </li>
   
  </ul>
</div> <!<!--End of vertical nav bar -->
<!<!-- start of home view -->
<div class="container">
 <div class="col-sm-9 col-md-10">
    <div class="row">
        
<div class="col-sm-4 mt-5">
    <div class="card-text-white bg-success md-3" style="max-width: 18rem;" >
        <div class=" card-header"> Total Book Return </div>
        <div class="card-body">  
            <h4 class="card-title"> 0 </h4>
            <a class="btn text-white" href="#"> view </a>     
            </div>
</div>
</div>   
<div class="col-sm-4 mt-5">
    <div class="card-text-white bg-danger md-3" style="max-width: 18rem;" >
        <div class=" card-header"> Total Book issued </div>
        <div class="card-body">  
            <h4 class="card-title"> 3 </h4>
            <a class="btn text-white" href="#"> view </a>     
            </div>
</div>
</div>
<div class="col-sm-4 mt-5">
    <div class="card-text-white bg-primary md-3" style="max-width: 18rem;" >
        <div class=" card-header"> Book Bank</div>
        <div class="card-body">  
            <h4 class="card-title"> 0 </h4>
            <a class="btn text-white" href="#"> view </a>     
            </div>
</div>
</div>  
        
</div>
</div>
</div>
<div class="container1">
<div class="mx-5 mt-5 text-center">
    <p class="bg-dark text-white p-2"> List of Book Issued </p>
    <?php
     $hhh = "SELECT * FROM issuebook WHERE username = '$_SESSION[name]'";
     $result=$conn->query($hhh);
     if($result->num_rows > 1){
         echo '
             <table class="table">
             <thead>
                <tr>
                <th scope="col"> USER ID </th>
                <th scope="col"> Book Name </th>
                <th scope="col"> Author Name </th>
                <th scope="col"> Issue Date </th>
                <th scope="col"> Return Date </th>
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
                 
                 
                 echo '</tr>';
             
             }
             echo '</tbody>
         </table>
         ';
         
     }
     
    ?>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>



