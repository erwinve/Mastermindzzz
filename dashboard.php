<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   ?>
<div class="blackground"></div>
<div class="gamefield">
   <div class="rows border">
      <ul class="circledropdown">
         <li class="horizantal">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <div class="circle">
               </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="#">Home</a>
               <a class="dropdown-item" href="#">Profiel</a>
               <a class="dropdown-item" href="PHP/logout.php">Uitloggen</a>
            </div>
   </li>
   <li class="horizantal">
   <div class="circle">
   </div>
   </li>
   <li class="horizantal">
   <div class="circle">
   </div>
   </li>
   <li class="horizantal">
   <div class="circle">
   </div>
   </li>
   </ul>
</div>
</div>
</div>
<?php
   include('Includes/footer.php');
   
   ?>