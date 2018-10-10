<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mastermindzzz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
      if(isset($_SESSION['loggedin'])){
        echo'<li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
          echo $_SESSION["username"];
          echo'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Home</a>
          <a class="dropdown-item" href="#">Profiel</a>
          <a class="dropdown-item" href="PHP/logout.php">Uitloggen</a>
        </div>
      </li>';
      }
      else{
        echo'
        <button class="btn btn-sm btn-outline-primary" type="submit">Inloggen</button>
        <button class="btn btn-sm btn-outline-primary navbuttons" type="submit">Registreren</button>
        
        ';
      }
      ?>
    </ul>
  </div>
</nav>