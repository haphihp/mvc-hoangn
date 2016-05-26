<?php 
session_start();
define ('PATH',dirname(__FILE__));
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
</head>
<body>
<?php
if(!isset($_SESSION['username']))
{
	if(isset($_GET['h']))
	{
		$controller = $_GET['h'];
		if($controller=='user')
		{
			$filename = $controller.'controller.php';
			require_once PATH.'/controller/'.$filename;
			if(isset($_GET['action']))
			{
				$action= $_GET['action'];
			}
			else
			{
				$action = 'signin';
			}
				$a = new $controller;
				$a ->$action();
		}
	}
	else
	{
		header('location:index.php?h=user');
	}
}
else
{
if(isset($_GET['h']))
{
$controller = $_GET['h'];
}
else
{
	$controller = 'tintuc';
}
	$filename = $controller.'controller.php';
	require_once PATH.'/controller/'.$filename;
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else
	{
		$action = 'allnews';
	}
	$a = new $controller;
	$a ->$action();
}
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/npm.js"></script>
</body>
</html>



