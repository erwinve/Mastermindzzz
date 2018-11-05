<?php
    $pagetitle = 'Congratulations!';
    include('PHP/dbconnect.php');
    include("PHP/titleinf.php");
    include("Includes/head.php");
    include("Includes/navbar.php");
    include("Includes/destroygame.php");
    ?>

    <?php
    echo $_SESSION['winneracces'];
    if (isset($_SESSION['loggedin']) && $_SESSION['winneracces'] > 0){
        $id = $_SESSION['id'];
        $username = mysqli_real_escape_string($link, $_SESSION['username']);
        $gamepoints = $_SESSION['gamepoints'];

        echo "Congratulations " . $_SESSION['username'] . " u won " . $gamepoints . "points!";

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





            $sql="UPDATE user SET score = score + $gamepoints, games_played = games_played + 1 WHERE ID = $id";

            mysqli_query($link, $sql);
        }
        else{
         header('location: index.php');
         exit();
        }

    ?>



<?php
   include('Includes/footer.php');
?>