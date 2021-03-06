<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

  session_start();
  if($_GET["status"]==2){
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARC website</title>
  <meta charset="utf-8">
  <meta name="keywords" content=" automation, robotics, club, science, technology, blogs, BITS, Pilani, Hyderabad, campus, robots, ATMOS"> 
  <meta name="description" content=" The Automation and Robotics Club (ARC) is a student organization at BITS Pilani Hyderabad Campus.  We comprise people who love experimenting around with circuit boards, codes and yes, ideas. ARC was started in 20__ and has been around for quite some time now.
             Robotics is a versatile field which is highly interdisciplinary. Even small projects involve coding, mechanical, electronics and design expertise, which means we always work in teams and all our projects are group projects.
Our current projects include autonomous applications like chess-playing using AI, autonomous drawing robot and fields like self-navigation and self-balancing.
Also, we proudly boast of a full scale robotic arm and a micro-quadcopter developed on our own from scratch."> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../blog/images/arc.png" type="image/png">
  <link rel="stylesheet" href="../blog/bootstrap4/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="home.css">

  <script src="../blog/jquery.min.js"></script>
  <script src="../imagesLoaded.js"></script>
  <script src="https://use.fontawesome.com/1523c943cd.js"></script>
  <script src="../blog/bootstrap4/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/api:client.js"></script> 
  <script src="login.js"></script>
  
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=122099171720574";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>


  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img class="nav-image" src="images/arc.png">
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../user-profile/index.php">Members<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#achievements">Achievements<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog/index.php">Blog<span class="sr-only">(current)</span>
          </a>
        </li><?php if(!isset($_SESSION["login-status"]) || empty($_SESSION["login-status"]) || $_GET["status"]==2){ echo '
        <li class="nav-item">
          <a id="loginUser" class="nav-link" href="#">Login<span class="sr-only">(current)</span>
          </a>
        </li>';}
        else{
          echo '
        <li class="nav-item">
          <a id="loginUser" class="nav-link" href="../home/index.php?status=2">Logout<span class="sr-only">(current)</span>
          </a>
        </li>';
          }?>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
         <a id="webdev" class="nav-link" data-toggle="modal" data-target="#wd"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Modal -->
<div id="wd" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" style="color:black">Web Dev Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-3 text-center">
        <img src="images/yashdeep.jpg" class="rounded-circle" alt="bot1" width="150" height="150">
        <p style="color:black">Yashdeep</p>
      </div>
      <div class="col-sm-3 text-center">
        <img src="images/shyam.jpg" class="rounded-circle" alt="bot1" width="150" height="150">
        <p style="color:black">Shyam</p>
      </div> 
      <div class="col-sm-3 text-center">
        <img src="images/shristy.jpg" class="rounded-circle" alt="bot1" width="150" height="150">
        <p style="color:black">Shristy</p>
      </div> 
      <div class="col-sm-3 text-center">
        <img src="images/srinkhala.jpg" class="rounded-circle" alt="bot1" width="150" height="150">
        <p style="color:black">Srinkhala</p>
      </div>
      </div>
      </div>
      </div>
    </div>

  </div>
</div>

  <div data-pop="slide-down" id="popup" <?php if($_GET["status"]==1){echo "class=\"show\"";} ?>>
      <div class="popupcontrols">
        <span id="popupclose">
          <i class="fa fa-times" aria-hidden="true"></i>
        </span>
      </div>

      <div class="popupcontent">
        <div class="center">
          <h3>Login with:</h3>
        </div>
        <div class="button-wrapper">
          <button id="customSignInBtn" class="loginBtn loginBtn--google" type="button">
            <i aria-hidden="true" class="fa fa-google"></i>
          </button>

          <button onclick="FBsignin()" class="loginBtn loginBtn--facebook" type="button">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </button>
        </div>
      </div>
  </div>
  <div id="overlay" <?php if($_GET["status"]==1){echo "class=\"show\"";} ?>></div>


  <div class="jumbotron text-center">
    <img src="images/arc-full.png" height="150px" width="400">
  </div>


  <!-- Container (About Section) -->

  <div id="events" class="container-fluid text-center bg-grey">
    <div class="parallax4">
      <div class="content3">
        <h2>Upcoming events and workshops:</h2>
        <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselEampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/robot.jpg" height="385px" width="771px" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <a class="carousel-links" target="_blank" href="https://bits-atmos.org/"><h3>Gear up for ATMOS 17</h3></a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/linefolo16.jpg" height="385px" width="771px" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Get started into robotics with the classic line follower</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/botshot16.jpg" height="385px" width="771px" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Also, do come for the botshot workshop</h3>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>   


  <div id="about" class="container-fluid">
    <div class="parallax1 back-load">
      <div class="content">
        <div class="row">
          <div class="col-sm-8">
            <h2>About ARC</h2><br>
            <h4> The Automation and Robotics Club (ARC) is a student organization at BITS Pilani Hyderabad Campus.  We comprise people who love experimenting around with circuit boards, codes and yes, ideas. ARC was started in 20__ and has been around for quite some time now.</h4><br>
            <p> Robotics is a versatile field which is highly interdisciplinary. Even small projects involve coding, mechanical, electronics and design expertise, which means we always work in teams and all our projects are group projects.
Our current projects include autonomous applications like chess-playing using AI, autonomous drawing robot and fields like self-navigation and self-balancing.
Also, we proudly boast of a full scale robotic arm and a micro-quadcopter developed on our own from scratch.
</p>
            <br>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div id="vision" class="container-fluid bg-grey">
    <div class="parallax2 back-load">
      <div class="content">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-8">
            <h2>Our Vision</h2><br>
            <h4><strong>MISSION:</strong>Our aim is to learn and work as much as we can with help from others in the club. We love it when people are interested in robotics and we are there to help anyone who who is a beginner in the field. Various people in the club have various expertises and there is a lot to learn if you are up for it! We aim to inspire others to be interested in robotics and get such people together so that everyone can progress as a team. 

 </h4><br> 
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="achievements" class="container-fluid text-center bg-grey">
    <div class="parallax3 back-load">
      <div class="content2">
        <h2>ACHIEVEMENTS</h2><br>
        <h4>What we have created</h4>
        <div class="row text-center slideanim">
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="images/robot.jpg" alt="bot1" width="400" height="300">
              <p><strong>Robot1</strong></p>
              <p> Robotic arm (maybe) </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="images/robot2.jpg" alt="bot2" width="400" height="300">
              <p><strong>Robot2</strong></p>
              <p>drawing bot</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="images/robot3.jpg" alt="bot3" width="400" height="300">
              <p><strong>Robot3</strong></p>
              <p>micro quads </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>        


  <div id="login" class="container-fluid bg-grey">
    <div class="parallax4">
      <div class="content3">
        <div class="row slideanim">
          <div class="col-sm-6 col-xs-12">
            <div id="map" class="container-fluid" margin="20px">                    <!--map to show our location-->
              <h2 class='text-center'>Location</h2>
            </div>      
          </div>     
          <div class="col-sm-6 col-xs-12">     
            <!-- Container (Contact Section) -->
            <div id="contact" class="container-fluid">
              <h2 class="text-center">CONTACT US</h2>
              <div class="row text-center">
                <div class="col-sm-12">
                  <p>Contact us and we'll get back to you within 24 hours.</p>
                  <p><span class="glyphicon glyphicon-map-marker"></span> Hyderabad, Telangana</p>
                  <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                  <p><span class="glyphicon glyphicon-envelope"></span> arc.bphc@gmail.com</p>
                </div>
		
<!--                 <div class="col-sm-7 slideanim">
                  <form action="trial.php" method="post">
                    <div class="row">
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                      </div>
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                      </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                      <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                      </div>
                    </div>
                  </form>
                </div> -->
		
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  // $(window).scroll(function() {
  //   $(".slideanim").each(function(){
  //     var pos = $(this).offset().top;

  //     var winTop = $(window).scrollTop();
  //       if (pos < winTop + 600) {
  //         $(this).addClass("slide");
  //       }
  //   });
  // });
})
</script>
<script>                                                                      //google maps javascript
  var map;
  function initMap() {
        var bphcloc = {lat: 17.5448948, lng: 78.5715885 };                    //our location
        map = new google.maps.Map(document.getElementById('map'), {
          center: bphcloc,
          zoom: 15
        });
        var marker = new google.maps.Marker({
          position: bphcloc,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvi07_F1aDElByzfsGB3AIgwiiH6OscTw&callback=initMap"
    async defer></script>

  </body>
  <script src="home.js"></script>
  </html>
