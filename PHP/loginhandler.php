<?php
session_start();

if (isset($_POST['submit']))
	{
	include 'dbconnect.php';

	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	if (empty($username) || empty($password))
		{
		header("Location: ../index.php");
		exit();
		}
	  else
		{
		$sql = "SELECT * FROM user WHERE uname='$username'";
		$result = mysqli_query($link, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1)
			{
			header("Location: ../index.php");
			exit();
			}
		  else
			{
			if ($row = mysqli_fetch_assoc($result))
				{
				$hashedpasswordcheck = password_verify($password, $row['pw']);
				if ($hashedpasswordcheck == false)
					{
					header("Location: ../index.php");
					exit();
					}
				elseif ($hashedpasswordcheck == true)
					{

					// log in user

					$_SESSION['loggedin'] = true;
					$_SESSION['username'] = $row['uname'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['ID'];
					header("Location: ../pregame.php");
					exit();
					}
				}
			}
		}
	}

?>