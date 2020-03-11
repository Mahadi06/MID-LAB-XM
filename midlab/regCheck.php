<?php 
	session_start();
	$error =0;
	if (isset($_REQUEST['signup'])) 
	{
		$id = $_REQUEST['id'];
		$password1 = $_REQUEST['password1'];
		$password2 = $_REQUEST['password2'];
		$name = $_REQUEST['name'];
		//$type = $_REQUEST['type'];

		if(empty(trim($name)) ||empty(trim($password1)) || empty(trim($password2)) || empty(trim($id)) )
			{
				echo 'Boxes must be fill up';
				$error++;

			 }

			 if($password1 !== $password2)
			 {
			 	echo 'Password does not matched';
			 	$error++;
			 }

			 if(!isset( $_REQUEST['type']))
			 {
			 	echo 'Type is not selected';
			 	$error++;
			 	
			 }
			 else
			 {	
			 	$type = $_REQUEST['type'];

			 }


			// if ($password1 !== $password2) 
			// {
			// 	echo "Password is not matched";
			// }

			if($error==0)
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