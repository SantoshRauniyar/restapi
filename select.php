<?php

	
	$con=mysqli_connect('localhost','root','','coreapi')or die(mysqli_connect_error());
	

		
			
		$sql="SELECT *from user";
		if ($all=mysqli_query($con,$sql)) {
				$a=[];
			while ($row=mysqli_fetch_assoc($all)) {
				$a=$row;
			}
			//echo var_dump($a);
		$response=['status'=>'200','message'=>'Fetched Alll Data','data'=>$a];
		}
		else
		{
			$response=['status'=>'403','message'=>'Failed Fetching'];
			die('error'.mysqli_error($con));
		}

				$data=json_encode($response);
				
				$d=json_decode($data);
		print_r($d->data);
	

?>