 <?php
        
        $username=$_POST['uname'];
        $password=$_POST['psw'];

        if($username=="Admin" && $password=="inha"){
        header('location:Addminn.php');
        exit();
        }

  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Rogers Motel&Campground</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Navigation.css">
    <link rel="stylesheet" type="text/css" href="css/Carusel.css">
    <link href="images/icon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
	
<div class="container-fluid">

    <nav class="navbar navbar-default topMenu ">

        <div class="navbar-header">
       			 <a class="navbar-brand"><img src="images/AbdusoliPodderjka1.png" height="80" alt="KOA Campgrounds" title="KOA Campgrounds" /></a>
        </div> 
      
      
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="aminity.html">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="News_part_changes.php">News</a></li>
            <li><a href="#">Contact</a></li>
            <li>
             
            	<a  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="MMainn_PPagge.php" method="post">
      <span class="register">Don`t have account? <a href="Bootstrap_Regis_Orig.php">Register</a></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="imgcontainer">
          <img src="images/login.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="cont">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id="uname" >

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw">
            
          <button  type="submit" onclick="Validate()">Login</button>
          <input type="checkbox" checked="checked"> Remember me
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

              
            </li>
          </ul>

        </div>
         
    </nav><!-- /.navbar -->
<div class="navbar navbar-inverse mainMenu">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div class="navbar-collapse collapse " id ="list">
            <ul class="nav navbar-nav ">
                <li id="findReserveDropdown" class="dropdown ">
					<a href="Registration.php" >Reserve</a>
				</li>

			    <li class="dropdown ">
					<a href="https://www.google.com/maps/place/Roger's+Motel+%26+Campground/@44.466241,-71.5486407,572m/data=!3m2!1e3!4b1!4m5!3m4!1s0x4cb41282767c76b3:0xf676ce4f25ab100c!8m2!3d44.466241!4d-71.546452?hl=en"  data-close-others="true">Rogers Map</a>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">Ways To Stay</a>
                </li>
                <li class="dropdown ">
					<a href="Activities.html" >Activities</a>
                </li>
                <li class="dropdown ">
					<a href="#"  style="padding-right:0px;">Resources</a>
				</li>
			</ul>
		</div>
	
</div>
<!-- Carusel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/picture24.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enjoy with your famils</h1>
              <!-- <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/picture30_3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Your Dream Campsite</h1>
              <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/porcfest3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Variety activities</h1>
              <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<!-- Below carusel -->
    <h1 id="WaysTo">Ways to Stay</h1>
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/rv.png" alt="Generic placeholder image" width="140" height="140">
          <h2>RV CAMPING SITE</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="images/cabin.png" alt="Generic placeholder image" width="140" height="140">
          <h2>CABIN</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="images/tent1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>TENT CAMPING SITE</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

    <!--</div> /.container -->

    

<footer class="footer">
	
		<ul class="list-inline">
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#">Donate to Care Camps</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#">About</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#">Get The App</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#" target="_blank" rel="nofollow">Download a KOA Directory</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#">All Campgrounds</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#" title="Privacy/Terms">Privacy/Terms</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#">Site Map</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#" target="_blank" rel="nofollow">Press Room</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#" target="_blank">Blog</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="#" target="_blank">Employment</a></li>
			<li><span class="glyphicon glyphicon-triangle-right red-font" aria-hidden="true"></span><a href="">Contact Us/Help</a></li>
		</ul>        
		
			<div class="the_end">
				<b>&#169;&nbsp;2017 Web Project For Rogers Campground, Inc.</b>
			</div>
	
</footer>		
</div>
				
	<script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>


    <script>
      function Validate(){
         // window.location.href = "Addminn.php";
         document.getElementById('uname').innerHTML="";
        document.getElementById('psww').value="";
           
      }
    </script>


 


</body>
</html>
