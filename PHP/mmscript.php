<?php

if (!isset($_SESSION['access']))
	{
	header('Location: ../pregame.php');
	exit();
	}
  else
	{
	if ($_SESSION['start'] != true)
		{
			// echo 	"<div class='gameinfopopup'>
			// 			<h1>Welcome to Mastermind</h1>
			// 			<p>In this game you need to guess the code the bot makes!</p>
			// 		</div>";
		// the generated bot combination

		$colors = array('boardpinred', 'boardpinblue', 'boardpingreen', 'boardpinred', 'boardpinpurple');
		$botcombination = array();
		for ($i = 0; $i < 4; $i++)
			{
			$botcombination[$i] = $colors[mt_rand(0, 4) ];
			}

		print_r($botcombination);

		// making the empty array accesable for other files

		$_SESSION['botarray'] = $botcombination;

		// empty array for the gamefield and for the pins

		$gamefield = array();
		$pins = array();

		// making the empty arrays accesable for other files

		$_SESSION['gamefield'] = $gamefield;
		$_SESSION['pins'] = $pins;

		// if the difficulty is set, push the given ammount of rows in the empty array

		if (isset($_POST['difficultysubmit']))
			{
			$gamelength = $_POST['difficultyselect'];
			$_SESSION['gamelength'] = $gamelength;
			$_SESSION['gamepoints'] = $gamelength;

			// pushing empty cirlces

			for ($i = 0; $i < $_SESSION['gamelength']; $i++)
				{
				array_push($_SESSION['gamefield'], array('boardpinx', 'boardpinx', 'boardpinx', 'boardpinx'));
				}

			// pushing empty answer pins in the array

			for ($i = 0; $i < $_SESSION['gamelength']; $i++)
				{
				array_push($_SESSION['pins'], array('emptypin', 'emptypin', 'emptypin', 'emptypin'));
				}

			// make the gamelength useable for arrays

			$_SESSION['gamelength']--;
			}

		// set the start value to true

		$_SESSION['start'] = true;
		}

	// echo the two dimensional array(big circles)

	foreach($_SESSION['gamefield'] as $v1)
		{
		foreach($v1 as $v2)
			{
			echo "<div class='" . $v2 . "'></div>";
			}
		}

	// echo the two dimensional array(answer pins)
	echo "<div class='pinplace'>";
	foreach($_SESSION['pins'] as $v1)
		{
		foreach($v1 as $v2)
			{
			echo "<div class='" . $v2 . "'></div>";
			}
		}
		echo "</div>";
	}

?>
