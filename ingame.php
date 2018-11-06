<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   ?>
  <div class="board">
  
    <?php
    include('PHP/mmscript.php');
    if (isset($_SESSION['loggedin'])){
    ?>
    </div>
    <div class="outer">
    <form method="POST" action="PHP/colorhandler.php">
    <div class="form-group">

        <label for="exampleFormControlSelect1">Color 1</label>
    <select name="selector1" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Color 2</label>
    <select name="selector2" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Color 3</label>
    <select name="selector3" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Color 4</label>
    <select name="selector4" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>
    <button type="submit" name="submit" class="btn btn-primary mb-2">send</button>
    </div>

    </form>
    </div>
  </div>

    <div class="leaderboard">
  <?php
    include('leaderboards.php');
    ?>
    </div>
  


<?php
       }
   else{
    header('location: index.php');
    exit();
  
   }
   include('Includes/footer.php');
  
   
   ?>