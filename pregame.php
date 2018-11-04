<?php
   $pagetitle="Mastermind";
   include("PHP/titleinf.php");
   include("Includes/head.php");
   include("Includes/navbar.php");
   $_SESSION['access'] = 1;
   unset($_SESSION['array']);
   $_SESSION['start'] = false;
   ?>
   <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
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