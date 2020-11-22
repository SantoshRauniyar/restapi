<?php

	
	$con=mysqli_connect('localhost','root','','coreapi')or die(mysqli_connect_error());
	extract($_GET);

		if (isset($name) && isset($password)) {
			
		$sql="INSERT  into user(name,password)values('$name','$password')";
		if (mysqli_query($con,$sql)) {
			
			$response=['status'=>'200','message'=>'Data Saved Successfylly'];
		}
		else
		{
			$response=['status'=>'403','message'=>'Failed Insertion'];
			die('error'.mysqli_error($con));
					}
				$data=json_encode($response);
				print_r($data);
		}

?>