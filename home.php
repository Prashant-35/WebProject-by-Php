<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome to LMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- for marqueee-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  
<link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <nav class=" navbar navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="https://www.kashiit.ac.in/">
        <img width="60" height="30" src="https://www.kashiit.ac.in/wp-content/uploads/2020/12/logo-white-circle.png">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
       <a class="nav-link" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="blank">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="Aboutus.php" target="blank">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php" target="blank">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Registration
      </a>
     <div class="dropdown-menu">
         <a class="dropdown-item" href="user.php" target="blank">Sign-in</a> <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="signup.php" target="blank">Sing-up</a>
     </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Pay-Online
      </a>
     <div class="dropdown-menu">
         <a class="dropdown-item" href="https://smarthubeducation.hdfcbank.com/SmartFees/DirectLoadQuickPay.action?uniqueSessionIdentifier=066215353963508909630123456789&redirectionURL=" target="blank">HDFC</a> <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=831568" target="blank">SBI</a>
     </div>
    </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>
        
      <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/kit2.jpeg" alt="Los Angeles" width="1400" height="500">
    </div>
      <div class="carousel-item">
      <img src="img/fo1.jpg" alt="Chicago" width="1400" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/fo2.jpg" alt="Chicago" width="1400" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/fo3.jpg" alt="New York" width="1400" height="500">
    </div>
      <div class="carousel-item">
      <img src="img/fo4.jpg" alt="New York" width="1400" height="500">
    </div>
  </div>
      </div>
         
        <div class="marquee">
               <span class="badge badge-pill badge-primary" fixed>Latest News</span>
               <span style="color:red;"> *All the 4th Year student Please submit the book  &nbsp;	&nbsp;</span>
               <span style="color: blueviolet;"> *All the 4th Year student Please check your result &nbsp;	&nbsp;</span>
               <span style="color: green;"> *All the student Please Register On LMS 	&nbsp;	&nbsp;</span>
            </span>
        </div>
       
                <script>
 $('.marquee').marquee({
//speed in milliseconds of the marquee
duration: 9000,
//gap in pixels between the tickers
gap: 0,
//time in milliseconds before the marquee will start animating
delayBeforeStart: 0,
//'left' or 'right'
direction: 'left',
//true or false - should the marquee be duplicated to show an effect of continues flow
duplicated: true
});
</script>

<div class="hello" > <h3>OUR LIBRARY </h3></div>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
              <img src="img/cse.jpg">

            <div class="card-body">
              <p class="card-text">B.Tech <br> Computer Science Engineering <br> Books Are Avilable </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="login.php">View</a></button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
              <img src="img/ce.jpg">
            <div class="card-body">
              <p class="card-text">B.Tech <br> Civil Engineering <br> Books Are Avilable</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
          <div class="col">
          <div class="card shadow-sm">
              <img src="img/fo1.jpg">
            <div class="card-body">
              <p class="card-text">B.Tech <br> Mechnical Engineering <br> Books Are Avilable</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
          <div class="col my-4" >
          <div class="card shadow-sm">
              <img src="img/fo1.jpg">

            <div class="card-body">
              <p class="card-text">B.Tech <br> EC & EN Engineering <br> Books Are Avilable</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
          <div class="col my-4">
          <div class="card shadow-sm">
              <img src="img/fo1.jpg">

            <div class="card-body">
              <p class="card-text">M.B.A.<br>Master In Business Acadmey <br> Books Are Avilable</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
          <div class="col my-4">
          <div class="card shadow-sm">
              <img src="img/fo1.jpg">

            <div class="card-body">
                <p class="card-text">B.B.A <br> Bachelor In Business Acadmey <br> Books Are Avilable</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
</div>

</div>
<footer class="page-footer font-small color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5 color-dark">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Kashi Group of Institutions (KGI) got its existence in 2008 with the vibrant vision of Jain Education Society to give an outstanding ambience of technical education in the entire Uttar Pradesh.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">ERP</a>
        </p>
        <p>
          <a href="#!">Contact us</a>
        </p>
        <p>
          <a href="#!">Registration</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> Mirzamurad , Allahabad Highway 221307, Varanasi.
           </p>
           <a href="www.kashiit.ac.in"> <p>
                   www.kashiit.ac.in</p> </a>
        <p>
           1800 123 321</p>
        <p>1800 123 123</p>

      </div>          

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> www.kashiit.ac.in</a>
  </div>
  <!-- Copyright -->

</footer>

           
    </body>
</html>
