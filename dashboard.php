<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   ?>
<div class="blackground"></div>
<div id="DivBtn"> <input type="button" value="Red" onclick="changeRed();">
        <input type="button" id="btnG" value="Green" onclick="btnGreen();">
        <input type="button" id="btnB" value="Blue" onclick="btnBlue();">
        <input type="button" id="btnReset" value="Reset" onclick="btnReset()">
      </div>
<div class="gamefield">
   <div class="rows border">
   <ul>
   <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<li class="horizantalcircles"></li></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item bg-blue" href="#">Blauw</a>
          <a class="dropdown-item bg-red" href="#">Rood</a>
          <a class="dropdown-item bg-yellow" href="#">Geel</a>
          <a class="dropdown-item bg-green" href="#">Groen</a>
        </div>

   <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<li class="horizantalcircles"></li></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item bg-blue" href="#">Blauw</a>
          <a class="dropdown-item bg-red" href="#">Rood</a>
          <a class="dropdown-item bg-yellow" href="#">Geel</a>
          <a class="dropdown-item bg-green" href="#">Groen</a>
        </div>

           <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<li class="horizantalcircles"></li></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item bg-blue" href="#">Blauw</a>
          <a class="dropdown-item bg-red" href="#">Rood</a>
          <a class="dropdown-item bg-yellow" href="#">Geel</a>
          <a class="dropdown-item bg-green" href="#">Groen</a>
        </div>

           <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<li class="horizantalcircles" id="circle4" ></li></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a id="blue" on-click="changeBlue();" class="dropdown-item bg-blue" href="#">Blauw</a>
          <a class="dropdown-item bg-red" href="#" onclick="changeRsdfsdfed();">Rood</a>
          <a class="dropdown-item bg-yellow" href="#">Geel</a>
          <a class="dropdown-item bg-green" href="#">Groen</a>
        </div>
</ul>
</div>
</div>
</div>
<?php
   include('Includes/footer.php');
   
   ?>