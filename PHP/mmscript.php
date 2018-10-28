<?php

if ($_SESSION['start'] != true ) {

    $gamefield = array();

    $_SESSION['array'] = $gamefield;

    $game10 = 10;
    for($i = 0; $i < $game10; $i++){
        array_push($_SESSION['array'], array("<div class='boardpinx'></div>", "<div class='boardpinx'></div>", "<div class='boardpinx'></div>", "<div class='boardpinx'></div>"));
    }

    $_SESSION['start'] = true;
}

foreach($_SESSION['array'] as $v1){
    foreach($v1 as $v2){
        echo $v2;
    }
}
?>