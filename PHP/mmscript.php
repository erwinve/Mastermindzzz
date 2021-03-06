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

		// the colors

		$colors = array(
			'boardpinred',
			'boardpinblue',
			'boardpingreen',
			'boardpinred',
			'boardpinpurple',
			'boardpinviolet',
			'boardpinpink',
			'boardpinwhite',
			'boardpinorange',
			'boardpinlg'
		);
		$botcombination = array();
		for ($i = 0; $i < 4; $i++)
			{
			$botcombination[$i] = $colors[mt_rand(0, 9) ];
			}

		print_r($botcombination);
		echo "</br>";

		// empty array for the gamefield and for the pins

		$gamefield = array();
		$pins = array();

		// making the empty arrays accesable for other files
		$_SESSION['botarray'] = $botcombination;
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
				array_push($_SESSION['gamefield'], array(
					'boardpinx',
					'boardpinx',
					'boardpinx',
					'boardpinx'
				));
				}

			// pushing empty answer pins in the array

			for ($i = 0; $i < $_SESSION['gamelength']; $i++)
				{
				array_push($_SESSION['pins'], array(
					'emptypin',
					'emptypin',
					'emptypin',
					'emptypin'
				));
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
	}

echo "</div>";
?>

