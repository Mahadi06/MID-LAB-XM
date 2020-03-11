<?php 

	session_start();
	$count =0;
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
			//$user = fread($file, filesize('value.txt'));
			while(!feof($file))
			{
				//$data = fgets($user)
				$data = explode('|', fgets($file));

				if( trim($data[0]) == $uid && trim($data[1]) == $password)
				{
				//$_SESSION['uname'] = $uname;
				//$_SESSION['pass'] = $password;
					setcookie('username', $uid, time()+3600, '/');
					if(trim($data[3]) =='admin')
					{
						header("location: adminhome.php");
					}
					else
					{
						header("location: userhome.php");
						
					}

					
				}
				elseif($count==0)
				{
					echo "<h3>invalid uid/password</h3>";
					$count++;
				}
		}
			


			
		}		

	}
 ?>