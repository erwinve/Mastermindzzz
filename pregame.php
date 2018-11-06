<?php
   $pagetitle="Difficulty Select";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   if (isset($_SESSION['loggedin'])){
   include("Includes/navbar.php");
   $_SESSION['access'] = 1;
   unset($_SESSION['array']);
   $_SESSION['start'] = false;
   ?>
   <div class="container">
   <form action="ingame.php" method="POST">
    <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1" name="difficultyselect">
      <option value="10">Noob</option>
      <option value="8">A slightly better noob</option>
      <option value="5">Meme reviewer</option>
      <option value="3">Global Supreme Master Deagle Elite First Class</option>
      <option value="1">Mastermind</option>
    </select>
     <button type="submit" class="btn btn-primary" name="difficultysubmit">Submit</button>
    </div>

</form>
</div>



<?php
   }
   else{
     header('location: index.php');
     exit();
   }
   include('Includes/footer.php');
?>