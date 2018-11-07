<?php
session_start();

// if the colors are submitted make an array with the 4 given colors

if (isset($_POST['submit']))
	{
	$guess = array(
		$_POST['selector1'],
		$_POST['selector2'],
		$_POST['selector3'],
		$_POST['selector4']
	);

	// give the session arrays a name

	$botcombination = $_SESSION['botarray'];
	$arr = $_SESSION['gamefield'];
	if ($_SESSION['gamelength'] > 0)
		{

		// if the guesed array is the same as the bot combination

		if ($guess == $_SESSION['botarray'])
			{

			// give acces to the winner file

			$_SESSION['winneracces'] = 1;

			// header to the winner file

			header('Location: ../winner.php');
			exit();
			}
		  else
			{
			$botcombination = $_SESSION['botarray'];
			$pins = $_SESSION['pins'];

			// give the variable the length of the board

			$rowvalue = $_SESSION['gamelength'];
			$rowvalue2 = 0;

			// place the guess colors on the given position in the boardarray

			$arr[$rowvalue] = $guess;

			// decrement the variable value
			for ($i = 0; $i < 4; $i++)
			{
			if ($guess[$i] == $botcombination[$i])
				{
				$pins[$rowvalue][$i] = 'pinblack';
				}
			elseif (in_array($guess[$i], $botcombination))
				{
				$pins[$rowvalue][$i] = 'pinwhite';
				}
			}


			$rowvalue--;

			// if the circle with the given positions in the array is the same as the cirlce in the botcombination push a black pin in the array
			// elseif its in the array but not on the right position push a white pin in the array


			// increment value

			$rowvalue2++;

			// set the variable back to a session variable

			$_SESSION['gamelength'] = $rowvalue;
			$_SESSION['pins'] = $pins;
			}

		// set array back to a session array

		$_SESSION['gamefield'] = $arr;
		}
	  else
		{
		header('Location: ../lost.php');
		exit();
		}
	}

header('Location: ../ingame.php');
?>
