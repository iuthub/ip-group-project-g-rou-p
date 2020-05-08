<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-family: "Lato",sans-serif;
			transition: background-color .5s;
		}
/*ghghgh*/
		.sidenav{
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover, .offcanvas a:focus {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}


		


button.accordion {
    background-color: #2F2F2F;
    color: white;
    font-size: 20px;
    cursor: pointer;
    padding: 18px;
    width: 300px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 22px;
    transition: 0.4s;
    border-bottom:1px solid #555;
    border-left: 1px solid #555;
    border-right: 1px solid #555;
}

button.accordion.active, button.accordion:hover {
    background-color: #222222;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}


div.panel {
    /*padding: 0 18px;*/
    background-color: white;
    max-height: 0;
    overflow: hidden;
    width: 98%;
    transition: max-height 0.2s ease-out;
    
}

p{
	width: 100%;
	margin-left: 8px;
}

/*//Navigation Bar Style*/

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	
	background-color: #D20000;
	border:1px solid #555;
}

li a {
	display: block;
	color: #fffeff;
	font-size: 10px;
	padding: 8px;
	height: 40px;
	text-decoration: none;

}

li {
    text-align: center;
    border-bottom: 1px solid #555;


}

li a:hover{
	background-color: #ada33a;
	color: white;
}


	#main {
			width: 100%;
			height: 100%;
			/*margin-left: 200px;*/
			/*overflow-x: hidden;*/
			/*overflow-y: hidden;*/
			/*background: grey;*/

			transition: margin-left .5s;
			/*padding: 16px;*/
			/*width: 100%;*/
			/*height:100%;*/
			/*background-color: #FBE9BB;*/
		}
		body,html{
			width: 100%;		
			height: 100%;
			/*overflow-x: hidden;*/
		}
		object{
			height: 100%;
			width: 100%;		
			/*overflow-y: scroll;*/
			/*overflow-x: hidden;*/
		}


	</style>
</head>
<body>

<div id="mySidenav" class="sidenav">    <!-- MySideNav is started -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<button class="accordion" style="border-top: 1px solid #555;">Section 1</button>

<div class="panel">
<ul>
	<li style="border-top: none;"><a href="#" onclick="load_home1()">Users</a></li>
	<li><a href="#" onclick="load_home()">News</a></li>
	<li><a href="#news">Contact</a></li>
	<li style="border-bottom: none;"><a href="#news">About</a></li>
</ul>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>    <!-- MySideNav is finished -->





<span style="font-size: 30px; cursor: pointer" onclick="openNav()">&#9776; open</span>
<div id="main">
  <object id="obj" data="Administration.php">
	<!-- <span style="font-size: 30px; cursor: pointer" onclick="openNav()">&#9776; open</span> -->
  <object>
</div>


<!-- <div id="topBar"><a href ="#" onclick="load_home()"> HOME </a> </div>
<div id ="content"><object id="obj" data="Lab9.html"></object></div> -->



<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width="300px";
		document.getElementById("main").style.marginLeft="300px";
		document.body.style.backgroundColor="rgba(0,0,0,0.4)";
	}
	function closeNav() {
		document.getElementById("mySidenav").style.width="0";
		document.getElementById("main").style.marginLeft="0";
		document.body.style.backgroundColor="white";
	}

</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } 
    else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>



<script>
function load_home() {

		document.getElementById('main').innerHTML="";
		document.getElementById('main').innerHTML='<object id="obj" data="AddMinn_Newwss.php"></object>';
}

function load_home1() {

		document.getElementById('main').innerHTML="";
		document.getElementById('main').innerHTML='<object id="obj" data="Administration.php"></object>';
}

</script> 

</body>
</html>