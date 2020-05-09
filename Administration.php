<?php

if(isset($_POST['Submit']))
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
$id=$_POST['id'];

echo $fname;



$sql = $db->query("UPDATE residents SET fname='$fname',sname='$sname',
datein='$datein',dateout='$dateout',adults='$adults',kids='$kids',pets='$pets',accom='$accom' WHERE id='$id'");

}

if(isset($_POST['Delete']))
{

$id=$_POST['id'];	
$db=new PDO("mysql:host=localhost;dbname=new;", "root","");
$sql = $db->query("DELETE FROM residents WHERE id = $id" );

}


?>



<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Electrolize|Monoton" rel="stylesheet">

	<title> Display data on table!</title>
	<style type="text/css">
		table {
    border-collapse: collapse;
    margin-left: 30px;
    margin-top: 20px;
    border-radius: 40px;
    border: 1px solid black;
    width: 95%;
	}

	th, td {
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
	    background-color: #4CAF50;
	    color: white;
	}

		table tr:not(:first-child){
		cursor: pointer;
		transition: all .25s ease-in-out;

		}
		table tr:not(:first-child):hover
		{
			background-color: #ddd;
		}

		.Adminn {
			width: 1250px;
			height: 1500px;
			background-color: #FFFFFF;
			margin-left: 100px;
			margin-top: 50px;
			display: flex;
			flex-direction: column;
		}
		
		.analyze {
			width: 1150px;
			height: 700px;
			border-radius: 10px;

			border: 1px solid black;
		}

		.tab_class {
			width: 1100px;
			height: 1200px;
			margin-top: 5px;
			background-color: white;
			border-radius: 2px;
			border: 1px solid #111830;
		}
		 input[type="text"] {
			width: 250px;
			height: 30px;
			/*padding-right: 100px;*/
			border:0;
			color: black;
			border-radius: 5px;
			font-size: 15px;
			margin-left: 10px;
			border-radius: 3px;
			border: 1px solid #F39C12;
		}

		.names {
			display: flex;
			flex-direction: row;
			
		}

		.names h2 {
			margin-left: 200px;
		}

		div.names_inp {
		   /*display: flex;
		  align-items: center;*/
		  display: flex;
		  flex-direction: row;
		}

		.names_inp input[type="text"] {
			margin-left: 100px;
		}
		 input:focus {
			 /*outline: none !important;*/
			border-color: #F39C12;
			/*background-color: #F39C12;*/
		}
		.Adminn input[type="submit"]
		{
			width: 200px;
			background-color: #ED1C23;
			border-radius: 10px;
			height: 50px;
			font-size: 25px;
			margin-bottom: 5px;
			margin-top: 15px;
			margin-left: 200px;
			color: white;
		}
		
		.Adminn input[type="submit"]:hover 
		{
				background-color: #333332;
		}

	
		
		.Search {
			width: 80%;
			margin-left: 100px;
			padding-left: 100px;
			border: 1px solid black;
			/*background-color: grey;*/
		}

		.buttons{
			width: 1000px;
			height: 70px;
			margin-top: 50px;
			margin-left: 100px;
			display: flex;
			flex-direction: row;
			/*background-color: yellow;*/
		}
	</style>
</head>
<body>


<!-- $sql = $db->query("INSERT INTO residents(fname,sname,datein,dateout,adults,kids,pets,accom) VALUES ('$fname','$sname','$datein','$dateout','$adults','$kids','$pets','$accom')"); -->
<!-- "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
fname = '$fname',sname='$sname',
 -->

<div class="Mainn">

<div class="Adminn">
	
	
		<form action="Administration.php" method="post">
  <div class="analyze">

  <!-- <div style="width: 100%; margin-top: 0px; border-radius: 5px; background-color: #FF3838; margin-bottom: 5px;"> -->
	<h1 style="margin-left: 400px; color: #00ABED; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;color: #00ABED;
          font-family: 'Electrolize', sans-serif;
font-size: 45px;">Managing Users</h1>
  
	<div class="Search">
		<input type="text" name="search" placeholder="Enter First name">
		<input type="submit" value="Search"><br><br>
	</div>

	<div class="names">
		<div class="class_in"> <h2>ID</h2> </div>
		<div class="class_in"> <h2>First Name</h2></div>
		<div class="class_in"> <h2>Second Name</h2></div>
	</div>

	<div class="names_inp">
		<input type="text" name="id" id="id" ><br><br>
		<input type="text" name="fname" id="fname" ><br><br>
		<input type="text" name="sname" id="sname"><br><br>
	</div>	

	<div class="names">
		<div class="class_in"> <h2>Date In</h2> </div>
		 <div class="class_in"><h2>Date Out</h2></div> 
		 <div class="class_in"><h2>Number of Adults</h2></div>
	</div>

	<div class="names_inp">
		<input type="text" name="in" id="datein"><br><br>
		<input type="text" name="out" id="dateout"><br><br>
		<input type="text" name="adults" id="adults"><br><br>
	</div>

	<div class="names">
		<div class="class_in"> <h2>Kids</h2></div>
		 <div class="class_in"><h2>Pets</h2></div> 
		 <div class="class_in" style="margin-left: 50px;"><h2>Type of Accomodation</h2></div>
	</div>
	
	<div class="names_inp">
		<input type="text" name="kids" id="kids"><br><br>
		<input type="text" name="pets" id="pets"><br><br>
		<input type="text" name="accom" id="accom"><br><br>
	</div>

  <div class="buttons">		
	<input type="submit" name="Submit" value="Submit">
	<input type="submit" name="Delete" value="Delete">
  </div>


</div> <!-- Class Analyze is finished --> 

<div class="tab_class">
	<h1 style="margin-left: 300px;">All Guests In Rogers Campground</h1>
	<table id="table"> 
	  
	  <tr>	
		<th>First Name</th>
		<th>Second Name</th>
		<th>Date in</th>
		<th>Date out</th>
		<th>Adults</th>
		<th>Kids</th>
		<th>Pets</th>
		<th>Accomodation</th>
		<th>ID</th>
	</tr>
<?php 
$db=new PDO("mysql:host=localhost;dbname=new;", "root","");

$rows=$db->query("SELECT fname,sname,datein,dateout,adults,kids,pets,accom,id FROM residents;");
foreach($rows as $row)
{?>
	
<tr> 
	
	<td>	<?=$row["fname"]; ?>  </td>
	<td>	<?=$row["sname"]; ?>  </td>
	<td>	<?=$row["datein"]; ?>  </td>
	<td>	<?=$row["dateout"]; ?>  </td>
	<td>	<?=$row["adults"]; ?>  </td>
	<td>	<?=$row["kids"]; ?>  </td>
	<td>	<?=$row["pets"]; ?>  </td>
	<td>	<?=$row["accom"]; ?>  </td>
	<td>	<?=$row["id"]; ?>  </td>
 </tr>
<?php
}
?>
</table>

</div> <!-- Table Class is finished -->

</form>

</div>    <!-- Class Adminn is finished -->


</div>   <!-- Class Mainn is finished -->
<script>
		
	var table =document.getElementById("table"),rIndex;
	for(var i=0;i<table.rows.length;i++){

		table.rows[i].onclick=function(){
			rIndex=this.rowIndex;
			console.log(rIndex);
	document.getElementById("fname").value=this.cells[0].innerHTML;
	document.getElementById("sname").value=this.cells[1].innerHTML;
	document.getElementById("datein").value=this.cells[2].innerHTML;	
	document.getElementById("dateout").value=this.cells[3].innerHTML;
	document.getElementById("adults").value=this.cells[4].innerHTML;
	document.getElementById("kids").value=this.cells[5].innerHTML;	
	document.getElementById("pets").value=this.cells[6].innerHTML;
	document.getElementById("accom").value=this.cells[7].innerHTML;
	document.getElementById("id").value=this.cells[8].innerHTML;
		
		};
	}

	function editRow(){
		table.rows[rIndex].cells[0].innerHTML=document.getElementById("fname").value;
		table.rows[rIndex].cells[1].innerHTML=document.getElementById("sname").value;
		table.rows[rIndex].cells[2].innerHTML=document.getElementById("datein").value;
		table.rows[rIndex].cells[3].innerHTML=document.getElementById("dateout").value;
		table.rows[rIndex].cells[4].innerHTML=document.getElementById("adults").value;
		table.rows[rIndex].cells[5].innerHTML=document.getElementById("kids").value;
		table.rows[rIndex].cells[6].innerHTML=document.getElementById("pets").value;
		table.rows[rIndex].cells[7].innerHTML=document.getElementById("accom").value;
		table.rows[rIndex].cells[8].innerHTML=document.getElementById("id").value;
	}


	</script>


<?php
if(isset($_REQUEST['search']))
	{
     $rows=$db->query("SELECT fname,sname,datein,dateout,adults,kids,pets,accom,id FROM residents WHERE fname=".$db->quote($_REQUEST['search']));
     foreach ($rows as $row) {
  			 echo $row["id"]; 
     }
}
?>
</body>
</html>