<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   $_SESSION['access'] = 1;
   unset($_SESSION['array']);
   $_SESSION['start'] = false;
   ?>
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
    </div>
    <button type="submit" class="btn btn-primary" name="difficultysubmit">Submit</button>
</form>



<?php
   include('Includes/footer.php');
   
?>