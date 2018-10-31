<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   ?>
  <div class="board">
  <table>
    <?php include('PHP/mmscript.php');?>
    </table>
    
    <form method="POST" action="PHP/colorhandler.php">
    <div class="form-group">

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector1" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector2" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector3" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector4" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
    </select>

    </div>
    <button type="submit" name="submit" class="btn btn-primary mb-2">send</button>
    </form>
  </div>
  


<?php
   include('Includes/footer.php');
   
   ?>