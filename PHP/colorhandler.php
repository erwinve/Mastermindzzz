<?php
session_start();
    //if the colors are submitted make an array with the 4 given colors
    if(isset($_POST['submit'])){
        $guess = array($_POST['selector1'], $_POST['selector2'], $_POST['selector3'], $_POST['selector4']);
 
        //give the session arrays a name
        $botcombination = $_SESSION['botarray'];
        $arr = $_SESSION['gamefield'];

        if ($_SESSION['gamelength']  > 0){

    
            // if the guesed array is the same as the bot combination
            if ($guess == $_SESSION['botarray']) {

                //unset the session array and header to the pregame file
                header('Location: ../winner.php');
                exit();
            
            }
            else{
                //give the variable the length of the board
                $i = $_SESSION['gamelength'];
                //place the guess colors on the given position in the boardarray
                $arr[$i] = $guess;
                //decrement the variable value
                $i--;
                //set the variable back to a session variable
                $_SESSION['gamelength'] = $i;
            }

            //set array back to a session array
            $_SESSION['gamefield'] = $arr;

        }
        else{
            header('Location: ../lost.php');
            exit();
        }
    }

 
    header('Location: ../ingame.php');
?>