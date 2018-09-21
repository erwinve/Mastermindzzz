<?php
$pattern = array('blue', 'red', 'green', 'yellow');
$gamelength = "10";
//shuffle($pattern);
$playersguess = array('blue', 'red', 'green', 'yellow');


while($playersguess != $pattern){
    //drop another row

    //check if the pattern matches or not
    if ($playersguess != $pattern)
    {
        echo "NIET<br/>";
    }
    else
    {
        echo "HETZELFDE";
        exit();
    }

}
if ($playersguess == $pattern)
{
    echo "WEL<br/>";
    exit();
}

?>