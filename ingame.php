<?php
$pagetitle = "Mastermind";
include ("PHP/titleinf.php");

include ("Includes/head.php");

include ("Includes/navbar.php");

?>
  <div class="board">
  
    <?php
include ('PHP/mmscript.php');

if (isset($_SESSION['loggedin']))
	{
?>
    </div>
    <div class="container">
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
      <option value='boardpinorange'>orange</option>
      <option value='boardpinviolet'>violet</option>
      <option value='boardpinlg'>lightgreen</option>
      <option value='boardpinpink'>pink</option>
      <option value='boardpinwhite'>white</option>
    </select>

        <label for="exampleFormControlSelect1">Color 2</label>
    <select name="selector2" class="form-control" id="exampleFormControlSelect1">
    <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
      <option value='boardpinorange'>orange</option>
      <option value='boardpinviolet'>violet</option>
      <option value='boardpinlg'>lightgreen</option>
      <option value='boardpinpink'>pink</option>
      <option value='boardpinwhite'>white</option>
    </select>

        <label for="exampleFormControlSelect1">Color 3</label>
    <select name="selector3" class="form-control" id="exampleFormControlSelect1">
    <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
      <option value='boardpinorange'>orange</option>
      <option value='boardpinviolet'>violet</option>
      <option value='boardpinlg'>lightgreen</option>
      <option value='boardpinpink'>pink</option>
      <option value='boardpinwhite'>white</option>
    </select>

        <label for="exampleFormControlSelect1">Color 4</label>
    <select name="selector4" class="form-control" id="exampleFormControlSelect1">
      <option value='boardpinred'>red</option>
      <option value='boardpinblue'>blue</option>
      <option value='boardpinyellow'>yellow</option>
      <option value='boardpingreen'>green</option>
      <option value='boardpinpurple'>purple</option>
      <option value='boardpinorange'>orange</option>
      <option value='boardpinviolet'>violet</option>
      <option value='boardpinlg'>lightgreen</option>
      <option value='boardpinpink'>pink</option>
      <option value='boardpinwhite'>white</option>
    </select>
    <button type="submit" name="submit" class="btn btn-primary mb-2">send</button>
    </div>

    </form>
    </div>
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
