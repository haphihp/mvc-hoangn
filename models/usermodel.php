<?php 
require_once PATH.'/models/connect.php';
class userMD extends connect
{
	function getInfologin($username)
	{
		$select = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query( $this->con,$select);
		return mysqli_fetch_assoc($result);
	}
	function setsignup($username,$password,$email)
	{
		$sql = "SELECT * FROM user WHERE username='$username'";
		$query = mysqli_query($this->con,$sql);
		$data = count(mysqli_fetch_array($query));
		if($data>0)
		{
			return FALSE;
		}
		else
		{
		$sql = "INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')";
		$query = mysqli_query($this->con,$sql);
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		}
	}
}




