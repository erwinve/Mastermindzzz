<?php
    $pagetitle = 'Congratulations!';
    include("PHP/titleinf.php");
    include("Includes/head.php");
    include("Includes/navbar.php");
    include("Includes/destroygame.php");
    ?>
    <p>Congratulations u won!</p>

    <?php
    $gamepoints = $_SESSION['gamepoints'];
        switch ($gamepoints){
            case 10:
                $gamepoints = 1;
                break;

            case 8:
                $gamepoints = 3;
                break;

            case 5:
                $gamepoints = 5;
                break;

            case 3:
                $gamepoints = 8;
                break;

            case 1:
                $gamepoints = 10;
                break;
                
        }
 
        $username = mysql_real_escape_string($_SESSION['username']);



        $sql="UPDATE user SET highscore = highscore + $gamepoints WHERE uname = $_SESSION['username']";

    ?>



<?php
   include('Includes/footer.php');
   
?>