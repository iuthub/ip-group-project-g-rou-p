<?php  
if(isset($_REQUEST['Submit']))
{

$db=new PDO("mysql:host=localhost;dbname=new;", "root","");

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$datein=$_POST['in'];
$dateout=$_POST['out'];
$adults=$_POST['adults'];
$kids=$_POST['kids'];
$pets=$_POST['pets'];
$accom=$_POST['accom'];

$sql = $db->query("INSERT INTO residents (fname,sname,datein,dateout,adults,kids,pets,accom) VALUES ('$fname','$sname','$datein','$dateout','$adults','$kids','$pets','$accom')");
// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

  <!-- /*Paragraph style*/ -->
 <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Cinzel:400,700,900|Kreon" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Cinzel:400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Cinzel:400,700,900|Kreon" rel="stylesheet">

<!-- Info Modal Styles -->
<link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Graduate|Kreon" rel="stylesheet">\
<link href="https://fonts.googleapis.com/css?family=Changa+One|Graduate|Kreon" rel="stylesheet">

<!-- <link rel="stylesheet" type="text/css" href="Registr_style.css"> -->

	<style type="text/css">
		
		.MMain {
			width: 100%;
			height: 700px;
			background-image: url(pics/stars.jpg);
			background-size: cover;
			margin-top: 0;
			background-repeat-x: no-repeat;
			background-repeat-y: no-repeat;
			position: relative;
		}
		.aa {
			position: absolute;
			width: 600px;
			height: 500px;
			background-color: rgba(0,0,0,0.5);
			margin-top: 50px;
			margin-left: 400px;
			/*margin-top: 40px;*/
			/*padding-top: 10px;*/
			padding-left: 50px;
			border-radius: 15px;
			color: white;
			font-weight: bolder;
			box-shadow: inset -4px -4px rgba(0,0,0,0.5);
			font-size: 18px;	
		}

		.aa input[type="text"] {
			width: 230px;
			height: 35px;
			padding-left: 5px;
			border:0;
			color: black;
			border-radius: 5px;
			margin-left: 10px;

			/*-webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;*/
		}
		
		.aa input[type="submit"]{
			width: 200px;
			height: 45px;
			/*padding-left: 5px;*/
			border-radius: 8px;
			background-color: #FF5700;
			font-weight: bolder;
			font-size: 20px;
			margin-top: 40px;
			margin-left: 180px;
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		div.names {
			display: flex;
			flex-direction: row;
		}
		div.dates {
			display: flex;
			flex-direction: row;
			color: black;
		}
		div.labels{
			display: flex;
			height: 45px;
			margin-left: 10px;
			width: 500px;
			flex-direction: row;
			margin-top: 0px;
			/*text-align: center;*/
			/*background-color: yellow;*/
		}
		/*Class options is finished*/
		div.options {
			display: flex;
			flex-direction: row;
			color: black;
		}
		div.option2 {
			color: black;
		}
		#sel {
			width: 150px;
			margin-left: 20px;
			height: 30px;
			border-radius: 8px;
		}

		#sell{
			width: 200px;
			height: 30px;
			margin-left: 170px;
			/*margin-top: 20px;*/
			border-radius: 8px;
		}

		/*Class options is finished*/

		.labels h4 {
			margin-left: 80px;
		}

		#fu {
	    background: white url(pics/event.png) right no-repeat;
	    padding-left: 40px;
	    width: 220px;
	    height: 40px;
	    border-radius: 8px;
	    font-size: 18px;
	    /*background-color: yellow;*/
	    margin-left: 30px;
	
	}




.main {
    width: 1200px;
    /*display: flex;*/
    /*flex-direction: row;*/
    /*position: relative;*/
    height: 2000px;
    margin-left: 70px;
    /*background-color: yellow;*/
    margin-top: 10px;
  }
		
		.row {
      /*position: absolute;*/
      display: flex;
      align-items: flex-start;
			width: 1100px;
			margin: 20px 20px 10px 100px;
      height: 500px;
      /*background-color: black;*/
      /*margin-top: 20px;*/
    
			/*background-color: #FFE597;*/
		}

		div.lef{
      height: 400px;
      width: 400px;
      border-radius: 8px;
      margin-top: 20px;
      margin-left: 70px;
      background-color: #F5F5F5;
      border:1px solid #EDEDED;
      float: left;
      margin-bottom: 5px;
      display: flex;
      flex-direction: column;
    }
   div.righ{
      height: 400px;
      width: 500px;
      /*position: absolute;*/
      /*float: right;*/
      background-color: #F5F5F5;
      margin-top: 20px;
      /*margin-right: 30px;*/
      /*margin-left: 0px; */
      border-radius: 8px;
      padding-left: 10px;
    }


    .flex-element {
    	margin-bottom: 15px;
    	overflow: hidden;

    }

    hr{
    	height: 3px;
    	color: black;
    	 border-style: inset;

    }

    li {
    	font-size: 18px;
    	font-family: 'Kreon', serif;
    }

    .imag{
    	width: 300px;height: 250px;
    	transition: all 1s ease;
    	background-image: url('images/picture23.jpg');
    	background-size: 300px 300px;

    }
    .imag1{
      width: 300px;height: 250px;
      transition: all 1s ease;
      background-image: url('images/picture5.jpg');
      background-size: 300px 300px;

    }
    .imag2{
      width: 300px;height: 250px;
      transition: all 1s ease;
      background-image: url('images/picture30.jpg');
      background-size: 300px 300px;

    }

    .imag:hover{
    	 transform: scale(1.1);
    	 filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand');  
    }
    .imag1:hover{
       transform: scale(1.1);
       filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand');  
    }
    .imag2:hover{
       transform: scale(1.1);
       filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand');  
    }




/*Info Modal Styles*/
  

    .contact {
      width: 750px;
      padding-left: 20px;
      display: flex;
      flex-direction: row;
      height: 80px;
      background-color: #F4F4F4;
      border-top: 1px solid black;
      border-bottom: 1px solid black;

    }

    #fl-first.flex-item {
      margin-right: 70px;
    }


    .about {
      display: flex;
      flex-direction: row;
      width: 750px;
      height: 250px;
      margin-top: 10px;
      /*background-color: grey;*/
    }

    .ab-flex{
      width: 400px;
      height: 250px;
      /*background-color: red;*/


    }

    .imga {
      background-image: url('images/picture30.jpg');
      width: 300px;
      height: 230px;
      margin-top: 10px;
      margin-right: 10px;
      float: right;
      border-radius: 8px;
      border:2px solid black;
      transition: 2s;
      filter: grayscale(100%);
      background-size: 300px 300px;
    }
      .imga:hover{
        filter: none;
      }

    #ab-flex-sec.ab-flex {
      width: 400px;
      /*background-color: red;*/
    }

    .amenity {
      display: flex;
      flex-direction: row;
      height: 180px;
    }

    ul {
      list-style-type: none;
      /*background-color: blue;*/
    }
    li {
      font-size: 13px;
      font-family: 'Graduate', cursive;
      margin-top: 4px;
    }
    li::before {
      content:"\002022";
        color: red;
    }

    .flx-el h4 {
      margin-left: 40px;
      margin-bottom: 0px;
    }
    .flx-el {
      /*background-color: grey;*/
    }



/*Class Row2  style is startted*/

.row1 {
      /*position: absolute;*/
      display: flex;
      align-items: flex-start;
      width: 1100px;
      height: 500px;
      margin: 20px 20px 10px 100px;
      /*background-color: red;*/
      /*margin-top: 20px;*/
    
      /*background-color: #FFE597;*/
    }



	</style>
</head>
<body>

<div class="MMain">

<div class="aa">
<h2 style="margin-left: 200px;">Registration</h2>
<form method="post" action="Registration.php">

<div class="names">
		<input type="text" placeholder="Enter First Name" name="fname"><br><br>
		<input type="text" placeholder="Enter Last Name" name="sname" style="margin-left: 40px;"><br><br>
</div>

<div class="labels">
	<h4>Check in</h4>
	<h4 style="margin-left: 200px; margin-bottom: 40px;">Check out</h4>	
</div>  <!-- class labels is finished -->	

<div class="dates">
		<input type="date" name="in" id="fu">
		<input type="date" name="out" id="fu">
</div>

<div class="labelOptions" style="display: flex;flex-direction: row; width: 500px;height: 50px;">
	<h4 style="margin-left: 50px;">Adults 16+</h4>
	<h4 style="margin-left: 100px;">Kids 0-5</h4>
	<h4 style="margin-left: 100px">Pets</h4>

</div>

<div class="options">
	
		<select id="sel" name="adults">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>

		<select id="sel" name="kids">
			<option>1</option>
			<option>3</option>
			<option>2</option>
			<option>4</option>
			<option>5</option>
		</select>

		<select id="sel" name="pets">
			<option>Yes</option>
			<option>No</option>
		</select>
		
</div>

	<div class="accom" style="width: 400px; height: 30px; margin-left: 180px; margin-top: 20px;">
		<h4>Choose accomodation</h4>
	</div>

	<div class="option2">
		<select id="sell" name="accom">
			<option>Rv Camping</option>
			<option>Tent Camping</option>
			<option>Cabin</option>
		</select>
	</div>


		<input type="submit" name="Submit">

</form>

</div>  <!-- class aa is finished -->

</div>  <!-- Class MMain is finished -->

<div class="main">

	<div class="row">
      
      <div class="lef" >
    	<div class="flex-element" style="width: 300px; height: 250px;margin:20px 20px 0px 40px; " >	
    	<div class="imag">
      		<!-- <img src="pics\ass.jpg" style="border:1px solid black;" /> -->
     	</div>  <!-- Imag Class is finished -->

     	</div> 

     	<div class="flex-element">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 250px;margin-left: 50px; margin-top: 20px; height: 50px;background-color: #262626; border-radius: 8px; color: white; font-size: 20px;">View Details</button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" style="height: 270px;width: 800px; ">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: yellow;" >
     
        
        <div class="modal-body">
     
<!-- Part Info-Modal is started -->
    <h3>Campground Campsite</h3>

  <div class="contact">

  <div class="flex-item" id="fl-first">
    <p>1000 East Side Road Rt. 175Woodstock, NH 03293</p>
    <p><strong>Email:</strong> bbkoa1@roadrunner.com</p>
  </div>

  <div class="flex-item">
    <p><strong>Reserve</strong> 800-562-9736</p>
     <p><strong>Info:</strong>603-745-8008</p>
  </div>

  </div>  <!-- contact class is finished -->

  <div class="about">
    <div class="ab-flex">
      <h2 style="font-family: 'Changa One', cursive;">DELUXE CABIN (W/ BATHROOM)</h2>
      <p style="font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>
    </div>

    <div class="ab-flex" id="ab-flex-sec">  
      <div class="imga" >
        
      </div>
    </div>

  </div>  <!-- about class is finished -->


  <div class="amenity">
    
    <div class="flx-el">
    <h4>BEDS/LINENS</h4>
      <ul>
        <li>1 Bunk Bed Set-Single</li>
        <li>1 Queen Bed</li>
        <li>1 Queen Sleeper Sofa</li>
        <li>Linens Available($)</li>
      </ul>
    </div>

    <div class="flx-el">
      <h4>BATHROOM</h4>
      <ul>
        <li>Full Bath with Shower</li>
        <li>Shampoo/Conditioner</li>
        <li>Hairdryer</li>
      </ul>
    </div>
    
    <div class="flx-el">
      <h4>KITCHEN</h4>
      <ul>
        <li>Partial Kitchen</li>
        <li>Microwave</li>
        <li>Sink</li>
        <li>Mini-fridge</li>
        <li>Cookware/Utensils</li>
        <li>Dishware/Utensils</li>
        <li>Coffee Maker </li>
      
      

      </ul>
    </div>

    <div class="flx-el">
      <h4>OTHERS</h4>
      <ul >
        <li>No Pets </li>
        <li>Air Conditioning</li>
        <li>Heat</li>
        <li>Ceiling Fan </li>
        <li>Wi Fi</li>
        <li>1 TV</li>
        <!-- <li>Patio Furniture</li> -->
        
        
      </ul>
    </div>


  </div>



        </div>  <!-- class modal-body is finished -->
        
        <div class="modal-footer" style="height: 60px;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>   <!-- Class Modal-Content is finished -->
      
    </div>
  </div>        <!-- End -->  


      	</div>

    </div> <!-- //lef class is finished --> 

    <div class="righ">
    	<h3 style="font-family: 'Alfa Slab One', cursive;"> RV Camping </h3>
    	<hr/>
    	<p style="font-size: 20px; font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>

    	<p><strong style="color: red; font-size: 20px;">SLeep up to 6 people</strong></p>

    	<div style="display: flex; flex-direction: row;">
    		<div class="list-one">
    			<ul style="list-style-type: disc;">
    				<li>1 Bunk Bed Set-Single</li>
    				<li>1 Queen Bed</li>
    				<li>1 Queen Sleeper Sofa</li>
    				<li>Linens Available($)</li>
    			</ul>
    		</div>
    
    		<div class="list-one">
    			<ul style="list-style-type: disc;">
    				<li>Full Bath with Shower</li>
    				<li>Partial Kitchen</li>
    				<li>No Pets Allowed</li>
    			</ul>
    		</div>
    	</div>
    	

    </div>  <!-- Class Right is finished -->

 </div> <!--  Class row is finished -->


 
<!-- Second Row is started -->



<div class="row1">
       <div class="lef" >
      <div class="flex-element" style="width: 300px; height: 250px;margin:20px 20px 0px 40px; " > 
      <div class="imag1">
          <!-- <img src="pics\ass.jpg" style="border:1px solid black;" /> -->
      </div>  <!-- Imag Class is finished -->

      </div> 

      <div class="flex-element">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 250px;margin-left: 50px; margin-top: 20px; height: 50px;background-color: #262626; border-radius: 8px; color: white; font-size: 20px;">View Details</button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" style="height: 270px;width: 800px; ">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: yellow;" >
     
        
        <div class="modal-body">
     
<!-- Part Info-Modal is started -->
    <h3>Campground Campsite</h3>

  <div class="contact">

  <div class="flex-item" id="fl-first">
    <p>1000 East Side Road Rt. 175Woodstock, NH 03293</p>
    <p><strong>Email:</strong> bbkoa1@roadrunner.com</p>
  </div>

  <div class="flex-item">
    <p><strong>Reserve</strong> 800-562-9736</p>
     <p><strong>Info:</strong>603-745-8008</p>
  </div>

  </div>  <!-- contact class is finished -->

  <div class="about">
    <div class="ab-flex">
      <h2 style="font-family: 'Changa One', cursive;">DELUXE CABIN (W/ BATHROOM)</h2>
      <p style="font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>
    </div>

    <div class="ab-flex" id="ab-flex-sec">  
      <div class="imga" >
        
      </div>
    </div>

  </div>  <!-- about class is finished -->


  <div class="amenity">
    
    <div class="flx-el">
    <h4>BEDS/LINENS</h4>
      <ul>
        <li>1 Bunk Bed Set-Single</li>
        <li>1 Queen Bed</li>
        <li>1 Queen Sleeper Sofa</li>
        <li>Linens Available($)</li>
      </ul>
    </div>

    <div class="flx-el">
      <h4>BATHROOM</h4>
      <ul>
        <li>Full Bath with Shower</li>
        <li>Shampoo/Conditioner</li>
        <li>Hairdryer</li>
      </ul>
    </div>
    
    <div class="flx-el">
      <h4>KITCHEN</h4>
      <ul>
        <li>Partial Kitchen</li>
        <li>Microwave</li>
        <li>Sink</li>
        <li>Mini-fridge</li>
        <li>Cookware/Utensils</li>
        <li>Dishware/Utensils</li>
        <li>Coffee Maker </li>
      
      

      </ul>
    </div>

    <div class="flx-el">
      <h4>OTHERS</h4>
      <ul >
        <li>No Pets </li>
        <li>Air Conditioning</li>
        <li>Heat</li>
        <li>Ceiling Fan </li>
        <li>Wi Fi</li>
        <li>1 TV</li>
        <!-- <li>Patio Furniture</li> -->
        
        
      </ul>
    </div>


  </div>



        </div>  <!-- class modal-body is finished -->
        
        <div class="modal-footer" style="height: 60px;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>   <!-- Class Modal-Content is finished -->
      
    </div>
  </div>        <!-- End -->  


        </div>

    </div> <!-- //lef class is finished --> 

    <div class="righ">
      <h3 style="font-family: 'Alfa Slab One', cursive;"> Tent Camping Site </h3>
      <hr/>
      <p style="font-size: 20px; font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>

      <p><strong style="color: red; font-size: 20px;">SLeep up to 6 people</strong></p>

      <div style="display: flex; flex-direction: row;">
        <div class="list-one">
          <ul style="list-style-type: disc;">
            <li>1 Bunk Bed Set-Single</li>
            <li>1 Queen Bed</li>
            <li>1 Queen Sleeper Sofa</li>
            <li>Linens Available($)</li>
          </ul>
        </div>
    
        <div class="list-one">
          <ul style="list-style-type: disc;">
            <li>Full Bath with Shower</li>
            <li>Partial Kitchen</li>
            <li>No Pets Allowed</li>
          </ul>
        </div>
      </div>
      

    </div>  <!-- Class Right is finished -->

      

 </div> <!--  Class row1 is finished -->



<!-- Third Row is started  -->

<div class="row1">
       <div class="lef" >
      <div class="flex-element" style="width: 300px; height: 250px;margin:20px 20px 0px 40px; " > 
      <div class="imag2">
          <!-- <img src="pics\ass.jpg" style="border:1px solid black;" /> -->
      </div>  <!-- Imag Class is finished -->

      </div> 

      <div class="flex-element">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 250px;margin-left: 50px; margin-top: 20px; height: 50px;background-color: #262626; border-radius: 8px; color: white; font-size: 20px;">View Details</button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" style="height: 270px;width: 800px; ">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: yellow;" >
     
        
        <div class="modal-body">
     
<!-- Part Info-Modal is started -->
    <h3>Campground Campsite</h3>

  <div class="contact">

  <div class="flex-item" id="fl-first">
    <p>1000 East Side Road Rt. 175Woodstock, NH 03293</p>
    <p><strong>Email:</strong> bbkoa1@roadrunner.com</p>
  </div>

  <div class="flex-item">
    <p><strong>Reserve</strong> 800-562-9736</p>
     <p><strong>Info:</strong>603-745-8008</p>
  </div>

  </div>  <!-- contact class is finished -->

  <div class="about">
    <div class="ab-flex">
      <h2 style="font-family: 'Changa One', cursive;">DELUXE CABIN (W/ BATHROOM)</h2>
      <p style="font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>
    </div>

    <div class="ab-flex" id="ab-flex-sec">  
      <div class="imga" >
        
      </div>
    </div>

  </div>  <!-- about class is finished -->


  <div class="amenity">
    
    <div class="flx-el">
    <h4>BEDS/LINENS</h4>
      <ul>
        <li>1 Bunk Bed Set-Single</li>
        <li>1 Queen Bed</li>
        <li>1 Queen Sleeper Sofa</li>
        <li>Linens Available($)</li>
      </ul>
    </div>

    <div class="flx-el">
      <h4>BATHROOM</h4>
      <ul>
        <li>Full Bath with Shower</li>
        <li>Shampoo/Conditioner</li>
        <li>Hairdryer</li>
      </ul>
    </div>
    
    <div class="flx-el">
      <h4>KITCHEN</h4>
      <ul>
        <li>Partial Kitchen</li>
        <li>Microwave</li>
        <li>Sink</li>
        <li>Mini-fridge</li>
        <li>Cookware/Utensils</li>
        <li>Dishware/Utensils</li>
        <li>Coffee Maker </li>
      
      

      </ul>
    </div>

    <div class="flx-el">
      <h4>OTHERS</h4>
      <ul >
        <li>No Pets </li>
        <li>Air Conditioning</li>
        <li>Heat</li>
        <li>Ceiling Fan </li>
        <li>Wi Fi</li>
        <li>1 TV</li>
        <!-- <li>Patio Furniture</li> -->
        
        
      </ul>
    </div>


  </div>



        </div>  <!-- class modal-body is finished -->
        
        <div class="modal-footer" style="height: 60px;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>   <!-- Class Modal-Content is finished -->
      
    </div>
  </div>        <!-- End -->  


        </div>

    </div> <!-- //lef class is finished --> 

    <div class="righ">
      <h3 style="font-family: 'Alfa Slab One', cursive;"> DELUXE CABIN (W/ BATHROOM) </h3>
      <hr/>
      <p style="font-size: 20px; font-family: 'Kreon', serif;">A superior camping option for our "soft-rugged" outdoors guest. Luxury lodging which offers all the comforts of home and an areaoutside for cooking, dining and campfire experience.</p>

      <p><strong style="color: red; font-size: 20px;">SLeep up to 6 people</strong></p>

      <div style="display: flex; flex-direction: row;">
        <div class="list-one">
          <ul style="list-style-type: disc;">
            <li>1 Bunk Bed Set-Single</li>
            <li>1 Queen Bed</li>
            <li>1 Queen Sleeper Sofa</li>
            <li>Linens Available($)</li>
          </ul>
        </div>
    
        <div class="list-one">
          <ul style="list-style-type: disc;">
            <li>Full Bath with Shower</li>
            <li>Partial Kitchen</li>
            <li>No Pets Allowed</li>
          </ul>
        </div>
      </div>
      

    </div>  <!-- Class Right is finished -->

      

 </div> <!--  Class row1 is finished -->



</div>   <!-- Classs Main is finished -->


</body>
</html>



<!-- https://drive.google.com/drive/folders/0B_bXC0KA6HXSTzBjVjExZjg4Vm8 -->
