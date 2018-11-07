<?php
$pagetitle = "Difficulty Select";
include ("PHP/titleinf.php");

include ("Includes/head.php");

include ("Includes/navbar.php");

$_SESSION['access'] = 1;
unset($_SESSION['array']);
$_SESSION['start'] = false;

if (isset($_SESSION['loggedin']))
	{
?>
   <div class="container">
   <form action="ingame.php" method="POST">
    <div class="form-group">
    <label for="exampleSelect1">Select difficulty</label>
    <select class="form-control" id="exampleSelect1" name="difficultyselect">
      <option value="10">Noob | 10 tries</option>
      <option value="8">A slightly better noob | 8 tries</option>
      <option value="5">Meme reviewer | 5 tries</option>
      <option value="3">Global Supreme Master Deagle Elite First Class | 3 tries</option>
      <option value="1">Mastermind | 1 try</option>
    </select>
     <button type="submit" class="btn btn-primary" name="difficultysubmit">Submit</button>
    </div>

</form>
</div>



<?php
	}
  else
	{
	header('location: index.php');
	exit();
	}

include ('Includes/footer.php');

?>
