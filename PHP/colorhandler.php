<?php
session_start();
    $guess = array($_POST['selector1'], $_POST['selector2'], $_POST['selector3'], $_POST['selector4']);
    if(isset($_POST['submit'])){

        $arr = $_SESSION['array'];
        $arr = $guess;   
        var_dump($arr);
        echo $_SESSION['start'];
    }
    else{

    }
 
    header("Location: ../dashboard.php");
?>