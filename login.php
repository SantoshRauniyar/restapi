<?php
$con=mysqli_connect('localhost','root','','coreapi')or die(mysqli_connect_error());
extract($_GET);

if (isset($email) and isset($password)) {

	$sql="SELECT *FROM user where name='$email'";
	//echo $sql;
	$run=mysqli_query($con,$sql);
	//var_dump($run);
	$row=mysqli_fetch_assoc($run);

	//print_r($row);
	if ($row['name']==$email) {
		if ($row['password']==$password) {
			$response=['status'=>'200','message'=>'Login Success'];
http_response_code(200);
		}
		else
		{
			$response=['status'=>'404','message'=>'User not found Response'];
	http_response_code(404);	
}
		
	}
	else
	{
		$response=['status'=>'404','message'=>'User Not Found'];
http_response_code(404);	
}
	
}
else
{

$response=['status'=>'403','message'=>'Login failed'];
http_response_code(403);
}

print_r(json_encode($response));
