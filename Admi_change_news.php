<?php  

	$msg="";
	if (isset($_POST['upload'])) {
	$target="images/" .basename($_FILES['image']['name']);

	//connect to database
	$db=mysqli_connect("localhost","root","","new");

	//Get all submitted data from the form
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];

	// Taking Id of Required Button 
	$id=$_POST['id'];

	$sql = "UPDATE images SET image='$image',text='$text' WHERE id='$id'";
	mysqli_query($db,$sql);

		// echo "Hello sff";
		echo $id;

   }   
     // Post Upload if statement is finished
   // Next Part is started

   $db=new PDO("mysql:host=localhost;dbname=new;", "root","");

   for($x = 0; $x <= 10; $x++){
   		$rows=$db->query("SELECT id,image,text FROM images WHERE id='$x' ");
   
 
 	foreach ($rows as $row) {
 		if($x==1)
     	$picture1=$row["image"];
     	if($x==2)
     	$picture2=$row["image"];
     	if($x==3)
     	$picture3=$row["image"];
     	if($x==4)
     	$picture4=$row["image"];
     	if($x==5)
     	$picture5=$row["image"];
     	if($x==6)
     	$picture6=$row["image"];
     	if($x==7)
     	$picture7=$row["image"];
     	if($x==8)
     	$picture8=$row["image"];


     } 

} 
 // For Loop is finished

     // Next Part is finished


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">



	<style >
		.first{
			/*margin-top: 0px;*/
			width: 1300px;
			height: 655px;
			background-color: yellow;
			display: flex;
			flex-direction: column;
			/*margin-left: 20px;*/
		}

		.first-top {
			display: flex;
			flex-direction: row;
			border: 1px solid black;
		}

		.first-bottom {
			display: flex;
			flex-direction: row;
			border: 1px solid black;
		}

		.content {
			width: 320px;
			height: 300px;
			/*border: 1px solid black;*/
		}
		
		.img{
			width: 310px;
			height: 200px;
			border-radius: 5px;
			background-color: grey;
		}

		.immg {
			width: 300px;
			height: 200px;
			border-radius: 5px;
		}

		.tex {
			height: 50px;
			width:300px;
			border: 1px solid black;
		}
		.second {
			width: 1000px;
			height: 655px;
			background-color: grey;
			margin-left: 200px;
			position: relative;
		}
		.in-second {
			width: 500px;
			height: 500px;
			margin-left: 250px;
			margin-top: 100px;
			background-color: red;
			position: absolute;
		}
		button {
			width: 100px;
			height: 40px;
			color: white;
			font-size: 20px;
			background-color: #ED1C23;
			margin-left: 100px;
		}

	</style>

</head>
<body>

	<div class="first">
		<div class="first-top">
				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture1;?>" class="immg">
					</div>
					<div class="tex">
						<p id="one">Hello Abdusoli</p>
					</div>
					<button type="button" id="1" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content One is finished -->
				
				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture2;?>" class="immg">
					</div>
					<div class="tex">
						<p id="two">Hello Abdusoli</p>
					</div>
					<button id="2" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Two is finished -->

				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture3;?>" class="immg">
					</div>
					<div class="tex">
						<p id="three">Hello Abdusoli</p>
					</div>
					<button id="3" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Three is finished -->

				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture4;?>" class="immg">
					</div>
					<div class="tex">
						<p id="four">Hello Abdusoli</p>
					</div>
					<button id="4" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Four is finished -->

		</div>

		<div class="first-bottom">
					
				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture5;?>" class="immg">
					</div>
					<div class="tex">
						<p id="five">Hello Abdusoli</p>
					</div>
					<button type="button" id="5" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content One is finished -->
				
				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture6;?>" class="immg">
					</div>
					<div class="tex">
						<p id="six">Hello Abdusoli</p>
					</div>
					<button id="6" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Two is finished -->

				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture7;?>" class="immg">
					</div>
					<div class="tex">
						<p id="seven">Hello Abdusoli</p>
					</div>
					<button id="7" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Three is finished -->

				<div class="content">
					<div class="img">
						<img src="<?php echo 'images/'.$picture8;?>" class="immg">
					</div>
					<div class="tex">
						<p id="eight">Hello Abdusoli</p>
					</div>
					<button id="8" onClick="reply_click(this.id)">Update</button>
				</div> <!-- Content Four is finished -->


		</div>  <!-- Class First-Bottom is finished -->
	

	</div>


	<div class="second">
		
	<form method="post" action="AddMinn_Newwss.php" enctype="multipart/form-data">
	
	<div class="in-second">
		<input type="hidden" name="size" value="1000000">

		<div>
			<input type="file" name="image">
		</div>

		<div>
			<textarea name="text" cols="40" rows="4" placeholder="Say smth about this image.."></textarea>
		</div>

		<div>
			<input type="text" name="id" id="id">
			<input type="submit" name="upload" value="Upload Image">
		</div>
			 
	</form>
   </div>	

	</div>   <!-- Class Second is finished -->



	<script>
	function reply_click(clicked_id)
{

			$("button").click(function() {
		    $('html,body').animate({
		        scrollTop: $(".second").offset().top},
		        'slow');
		});
			var str=clicked_id;
			   // alert(str);
			   document.getElementById("id").value=str;

}
	</script>


   
	<?php

 $db=new PDO("mysql:host=localhost;dbname=new;", "root","");

 for($x=1;$x<=8;$x++){
 $rows=$db->query("SELECT image,text FROM images WHERE id='$x'");
 

 foreach ($rows as $row) {
     	// echo $row["News"];
     	$var=$row["text"];

     } 
  ?>

<script>

	  var id="<?php echo $x; ?>";
      
	if (id==1) {      
		var js_var1 = "<?php echo $var; ?>";
      document.getElementById("one").innerHTML=js_var1;
    }

    if (id==2) {      
    	var js_var2 = "<?php echo $var; ?>";
      document.getElementById("two").innerHTML=js_var2;
    }

    if (id==3) {      
    	var js_var3 = "<?php echo $var; ?>";
      document.getElementById("three").innerHTML=js_var3;
    }

    if (id==4) {      
    	var js_var4 = "<?php echo $var; ?>";
      document.getElementById("four").innerHTML=js_var4;
    }


    if (id==5) {      
		var js_var5 = "<?php echo $var; ?>";
      document.getElementById("five").innerHTML=js_var5;
    }

    if (id==6) {      
    	var js_var6 = "<?php echo $var; ?>";
      document.getElementById("six").innerHTML=js_var6;
    }

    if (id==7) {      
    	var js_var7 = "<?php echo $var; ?>";
      document.getElementById("seven").innerHTML=js_var7;
    }

    if (id==8) {      
    	var js_var8 = "<?php echo $var; ?>";
      document.getElementById("eight").innerHTML=js_var8;
    }
</script>


<?php

} 
// For loop is finished
// echo $var;


  ?>

</body>
</html>