<?php
    
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

  ?>

  <!DOCTYPE html>
<html>
<head>
    <title></title>

<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Changa+One|Graduate|Kreon" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Electrolize|Monoton" rel="stylesheet">
    <style type="text/css">
        h1 {
          color: #00ABED;
          font-family: 'Electrolize', sans-serif;
        }
        .lord {
          width: 100%;
          height: 1300px;
          background-image: url('images/twitter-bg.jpg');
          margin-top: 0px;
        }

        .glav {

            margin-left: 50px;
            width: 1265px;
            height: 650px;
            /*background-color: yellow;*/
            /*background-image: url('images/twitter-bg.jpg');*/
        }

        .news-parts {
            /*margin-top: 30px;*/
            width: 1260px;
            height: 500px;
            display: flex;
            flex-direction: row;
            /*background-color: black;*/
        }
        .ichki {
            display: flex;
            flex-direction: column;
            width: 315px;
            height: 500px;
            margin-right: 2px;
             /*background-color: black;*/
            /*border-right: 1px solid black;*/
        }
        .flexx-pic {
            position: relative;
            width: 315px;
            /*width: 50%;*/
            height: 360px;
        }
        
        div.def {
            color: black;
            height: 155px;
            padding-left: 3px;
            /*border-right:1px solid grey;*/
            font-size: 15px;
            /*background-color: black;*/
        }


    p{
      font-size: 15px;
      color: black;
      font-family: 'Electrolize', sans-serif;
    }

    /*  // Picture Animation*/
  




.image {
  opacity: 1;
  display: block;
  width:315px ;
  height:360px;
  /*width: 100%;*/
  border-radius: 5px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  background:transparent;
  background-color: black;
  top: 0;
  left: 0;
 
  transform: translate(-50%, -50%);
}

.flexx-pic:hover .image {
  /*opacity: 0.3;*/
  /*filter: grayscale(100%);*/
  filter: sepia(100%);
}

.flexx-pic:hover .middle {
  opacity: 1;
  /*filter: grayscale(100%);*/
}

.text {
  /*background-color: #4CAF50;*/
  background:transparent;
  color: blue;
  font-family: 'Archivo Black', sans-serif;
  position: absolute;
  width:25px ;
  height: 200px;
  font-size: 40px;
  /*padding: 100px 100px;*/
}

.top-part{
  height: 680px;
  width: 1200px;
}

/*Carousel*/
       .mySlide{
display: none;
}
.fade {
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .8}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .8}
to {opacity: 1}
}




/*Navigation Bar*/


        .nav{
            margin:0;
            position: relative;
          }
        .nav ul{
           margin: 0;
           padding: 0;
           width: 100%;
           top: 0;
             position: fixed;
          list-style-type: none;
          overflow: hidden;
          background-color: #000000;
            float: right;
            z-index: 2;
        }
        .nav li {
          float: right;
          display: block;
          color: rgb(25,129,226);
          font-family: "My Custom Font", Verdana, Tahoma;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 20px;
          cursor: pointer;
        }
        .nav li:hover{
          color: #C44C34;
        }

    </style>
</head>
<body>

<div class="nav" style="width: 100%; height: 25px; z-index: 2;">

        
  <!-- <a class="navbar-brand"><img src="Logos/AbdusoliPodderjka1.png" height="80" alt="KOA Campgrounds" title="KOA Campgrounds" /></a> -->
        

      <ul style="float:right;">
        <li><a href="Activities.html" style="color: blue; text-decoration: none;">Features</a> </li>
        <!-- <li>Portfolio</li> -->
        <li>Blog</li>
        <li>Contact</li>
        <li style="color: white; font-size: 22px;"><a href="MMainn_PPagge.php" style="color: white; text-decoration: none;"> Home</a></li>  
        <!-- <li style="float: left;"><a><img src="Logos/AbdusoliPodderjka1.png" height="50" alt="KOA Campgrounds" title="KOA Campgrounds" /></a></li> -->
      </ul>

      </div>



<div class="top-part" style="margin-left: 80px; box-shadow: 1px 9px 37px 20px rgba(23,19,23,1);">
    <img class="mySlide fade" src="images/picture30_3.jpg" style="width:1200px; height: 680px;">
    <img class="mySlide fade" src="images/picture27.jpg" style="width:1200px;height: 680px;">
    <img class="mySlide fade" src="images/picture22.jpg" style="width:1200px;height: 680px;">

</div>


<div class="bel-car" style="width: 100%; height: 450px; display: flex;flex-direction: row; background-image: url('images/twitter-bg.jpg');">

    <div class="rasmm" style="width: 400px; height: 200px;">
        <img src="images/twit.png" style="height: 250px; margin-top: 20px;">
    </div>

    <div style="margin-top: 100px; height: 150px; display: flex;flex-direction: column;">
      <div> <h1 style="font-size: 45px;color: #00ABED; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">All News In Our Campground</h1></div>

      <div style="margin-top: 80px;margin-right: 100px; "><h1 style="font-size: 40px; text-shadow: 0 0 3px #000000;">Innovation and storytelling and Technology</h1></div>
    </div>




       
 

</div>

<!-- <div class="bel-car" style="width: 100%;height: 400px;background-color: yellow;">
  
</div> -->


<div class="lord">

<div class="glav" >
    
    <!-- <div style="width: 400px;height: 90px; margin-left: 400px;">
       <h1>Innovation and storytelling and Technology</h1>
    </div> -->
        <div class="news-parts">
            <div class="ichki">
                <div class="flexx-pic">
                        <img src="<?php echo 'images/'.$picture1;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>

                </div>    <!--  class flexx-pic is finished -->
                <div class="def">
                    <!-- <h3>Digital</h3> -->
                <p  id="one">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki is finished -->        


            <div class="ichki">
                <div class="flexx-pic">
                        <img src="<?php echo 'images/'.$picture2;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>  
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
                <p id="two">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki2 is finished -->

            <div class="ichki">
                <div class="flexx-pic">
                            <img src="<?php echo 'images/'.$picture3;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
             <p id="three">As it seems very difficult to tell that which one is the best news website in the world. According to my point </p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki3 is finished -->

            <div class="ichki">
                <div class="flexx-pic">
                            <img src="<?php echo 'images/'.$picture4;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
             <p id="four">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki4 is finished -->

          
        </div>  <!-- class news part is finished -->

          <div style="width: 800px;height: 80px;margin-left: 300px;">
           <h1 style="font-size: 40px;text-shadow: 0 0 3px #000000;">Innovation and storytelling and Technology</h1>
        </div>

</div>  <!-- class glav is finished -->


<!-- NEw Glav is started -->
<div class="glav" >
    
    <!-- <div style="width: 400px;height: 50px;margin-left: 100px;">
       <h1>Innovation and storytelling and Technology</h1>
    </div> -->
        <div class="news-parts">
            <div class="ichki">
                <div class="flexx-pic">
                        <img src="<?php echo 'images/'.$picture5;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>

                </div>    <!--  class flexx-pic is finished -->
                <div class="def">
                    <!-- <h3>Digital</h3> -->
             <p id="five">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki is finished -->        


            <div class="ichki">
                <div class="flexx-pic">
                        <img src="<?php echo 'images/'.$picture6;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>  
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
            <p id="six">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki2 is finished -->

            <div class="ichki">
                <div class="flexx-pic">
                            <img src="<?php echo 'images/'.$picture7;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
            <p id="seven">As it seems very difficult to tell that which one is the best news website in the world. According to my point </p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki3 is finished -->

            <div class="ichki">
                <div class="flexx-pic">
                            <img src="<?php echo 'images/'.$picture8;?>"  class="image">
                            <div class="middle">
                                <div class="text">Read News</div>
                            </div>
                </div>
                <div class="def">
                    <!-- <h3>Digital</h3> -->
            <p id="eight">As it seems very difficult to tell that which one is the best news website in the world. According to my point</p>
            
                </div> <!-- class def is finished -->

            </div>  <!-- class ichki4 is finished -->

        </div>  <!-- class news part is finished -->

</div>  <!-- class glav is finished -->


</div>  <!-- Class Lord is finished -->



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


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlide fade");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000);
    }
</script>


</body>
</html>