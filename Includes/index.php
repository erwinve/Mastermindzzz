<?php
$pagetitle = 'Login';
include("PHP/titleinf.php");
include("Includes/head.php");
include("Includes/navbar.php");
?>
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center mb-4">Mastermindzzz
      </h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <!-- form card login -->
          <div class="card rounded-0">
            <div class="card-header">
              <h3 class="mb-0">Login
              </h3>
            </div>
            <div class="card-body">
              <form class="form" action="PHP/loginhandler.php" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                <div class="form-group">
                  <label for="uname1">Gebruikersnaam
                  </label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">
                  <div class="invalid-feedback">Voer je gebruikersnaam in.
                  </div>
                </div>
                <div class="form-group">
                  <label>Wacthwoord
                  </label>
                  <input type="password" class="form-control form-control-lg rounded-0" name="password" id="pwd1" required="" autocomplete="new-password">
                  <div class="invalid-feedback">Voer je wachtwoord in.
                  </div>
                </div>
                <div class="logbtns">
                  <button type="submit" class="btn btn-primary btn-lg" name="submit" id="submit">Login
                  </button>
                  <a href="register.php" class="btn btn-primary btn-lg">Register
                  </a>
                </div>
              </form>
            </div>
            <!--/card-block-->
          </div>
          <!-- /form card login -->
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/col-->
  </div>
  <!--/row-->
</div>
<!--/container-->
<?php
include('Includes/footer.php');
?>