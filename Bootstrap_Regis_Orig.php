<?php

	$msg="";
	if (isset($_POST['upload'])) {
	


	$db=mysqli_connect("localhost","root","","new");


	$username=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	// Taking Id of Required Button 


	$sql="INSERT INTO account (username,email,password) VALUES ('$username','$email','$password')";

	mysqli_query($db,$sql);


	

   }  



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script type="text/javascript" src="js.regex.js"></script>
				<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<style type="text/css">
			.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  min-width: 200px;
  max-width: 400px;
  max-height: 400px;
  padding: 40px;
  border-radius: 20px;
			background-color: rgba(14, 47, 64, 0.5);
}

 

		</style>

</head>
<body>

	<div class="Absolute-Center is-Responsive"	>

		<div>
  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
			    <li role="presentation"><a href="MMainn_PPagge.php" >Home</a></li>
			    
			  </ul>

			  <!-- Tab panes -->
 <div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="home">
			 <form onsubmit="return Validate()"  name="formvalidate" action="Bootstrap_Regis_Orig.php"
  method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="name">
					    <!-- <label>dsd</label> -->
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" id="em">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					  </div>
					  <!-- <div class="form-group">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" id="exampleInputFile" name="image">
					    
					  </div> -->

					  <input type="hidden" name="inc">
					 
					  <button type="submit" class="btn btn-default" name="upload" style="margin-left: 110px;margin-top: 30px; width: 100px;">Submit</button>
            </form>

        </div>
			    <div role="tabpanel" class="tab-pane" id="profile">Hello Abdusoli	</div>
 
  </div>   <!-- Class Tab-Content is finished -->

		</div>



		  
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>