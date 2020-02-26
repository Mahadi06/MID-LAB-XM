<?php 
	session_start();
	if (isset($_REQUEST['signup'])) 
	{
		$id = $_REQUEST['id'];
		$password1 = $_REQUEST['password1'];
		$password2 = $_REQUEST['password2'];
		$name = $_REQUEST['name'];
		$type = $_REQUEST['type'];

		if(empty(trim($name)) ||empty(trim($password1)) || empty(trim($password2)) || empty(trim($id)) ||empty($type))
		{
			echo 'Boxes must be fill up'; }

			// if ($password1 !== $password2) 
			// {
			// 	echo "Password is not matched";
			// }

			else
			{
				$data = $id.'|'.$password1.'|'.$name.'|'.$type."\n\r";

				$file = fopen('value.txt', 'a');
			 fwrite($file, $data);
			 fclose($file);

			 echo 'Registered';
			
			}

	}

	

	else
	{
		echo 'Invalid Submission';
	}
 ?>