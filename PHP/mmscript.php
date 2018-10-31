<?php
if(!isset($_SESSION['access'])){
    header('Location: ../pregame.php');
    exit();
}
    else{
    if ($_SESSION['start'] != true ) {


        //the generated bot combination
        $colors = array('boardpinred', 'boardpinblue', 'boardpingreen', 'boardpinred', 'boardpinpurple');
        $botcombination = array();
        for($i = 0; $i < 4; $i++){
            $botcombination[$i] = $colors[mt_rand(0, 4)];
        }
        print_r($botcombination);

        //making the empty array accesable for other files
        $_SESSION['botarray'] = $botcombination;

        //empty array for the gamefield
        $gamefield = array();

        //making the empty array accesable for other files
        $_SESSION['array'] = $gamefield;

        //if the difficulty is set, push the given ammount of rows in the empty array
        if(isset($_POST['difficultysubmit'])){

            $gamelength = $_POST['difficultyselect'];
            $_SESSION['gamelength'] = $gamelength;

            for($i = 0; $i < $_SESSION['gamelength']; $i++){
                array_push($_SESSION['array'], array('boardpinx', 'boardpinx', 'boardpinx', 'boardpinx'));
            }
            //make the gamelength useable for arrays
            $_SESSION['gamelength']--;
    }

        //set the start value to true
        $_SESSION['start'] = true;
    }

    //echo the two dimensional array
    foreach($_SESSION['array'] as $v1){
        foreach($v1 as $v2){
            echo "<div class='".$v2."'></div>";
        }
    }
}


?>