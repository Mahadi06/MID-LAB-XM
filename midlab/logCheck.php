<?php 

	session_start();
	if(isset($_REQUEST['login']))
	{
		$uid = $_REQUEST['uid'];
		$password =  $_REQUEST['pass'];

		if(empty(trim($uid)) || empty(trim($password)))
		{
			echo "Null submission found!";
		}

		else
		{
			$file = fopen('value.txt', 'r');
			$user = fread($file, filesize('value.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				//$_SESSION['uname'] = $uname;
				//$_SESSION['pass'] = $password;
				setcookie('username', $uname, time()+3600, '/');

				header("location: home.php");
			}
			else
			{
				echo "invalid uname/password";
			}
		}		

	}
 ?>