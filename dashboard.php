<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   ?>
  <div class="board">
    <?php include('PHP/mmscript.php');?>
    <form method="POST" action="PHP/colorhandler.php">
    <div class="form-group">

    <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector1" class="form-control" id="exampleFormControlSelect1">
      <option value="<div class='boardpinred'></div>">red</option>
      <option value="<div class='boardpinblue'></div>">blue</option>
      <option value="<div class='boardpinyellow'></div>">yellow</option>
      <option value="<div class='boardpingreen'></div>">green</option>
      <option value="<div class='boardpinpurple'></div>">purple</option>
    </select>

    <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector2" class="form-control" id="exampleFormControlSelect1">
    <option value="<div class='boardpinred'></div>">red</option>
      <option value="<div class='boardpinblue'></div>">blue</option>
      <option value="<div class='boardpinyellow'></div>">yellow</option>
      <option value="<div class='boardpingreen'></div>">green</option>
      <option value="<div class='boardpinpurple'></div>">purple</option>
    </select>

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector3" class="form-control" id="exampleFormControlSelect1">
    <option value="<div class='boardpinred'></div>">red</option>
      <option value="<div class='boardpinblue'></div>">blue</option>
      <option value="<div class='boardpinyellow'></div>">yellow</option>
      <option value="<div class='boardpingreen'></div>">green</option>
      <option value="<div class='boardpinpurple'></div>">purple</option>
    </select>

        <label for="exampleFormControlSelect1">Example select</label>
    <select name="selector4" class="form-control" id="exampleFormControlSelect1">
    <option value="asdf">red</option>
      <option value="<div class='boardpinblue'></div>">blue</option>
      <option value="<div class='boardpinyellow'></div>">yellow</option>
      <option value="<div class='boardpingreen'></div>">green</option>
      <option value="<div class='boardpinpurple'></div>">purple</option>
    </select>

    </div>
    <button type="submit" name="submit" class="btn btn-primary mb-2">send</button>
    </form>
  </div>
  
<?php
   include('Includes/footer.php');
   
   ?>