<?php 
session_start();
define ('PATH',dirname(__FILE__));
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




/*
session_start();
define ('PATH',dirname(__FILE__));//Đường dẫn file
if(!isset($_SESSION['username']))
{
	if(isset($_GET['h']))
	{
		$controller = $_GET['h'];
		switch ($controller) {
			case 'user':				
			//case 'signin':
			//case 'tintuc';
				$filename =$controller.'controller.php';
				break;
			default:				
				$controller = 'signin';
				$filename = $controller.'controller.php';
				break;
		}
	}
	else
	{
		$controller = 'signin';
		$filename = $controller.'controller.php';
	}
	require_once PATH.'/controller/'.$filename;
	new $controller;

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

*/
