<?php

if (isset($_POST['finished']))
	{
	$_SESSION['start'] = false;
	unset($_SESSION['array']);
	header('Location: ../index.php');
	}

?>
