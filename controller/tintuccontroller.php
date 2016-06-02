<?php 
class tintuc
{
function addca()//Thêm loại tin tức
{
	if(isset($_POST['ok']))
	{
		$catergory = $_POST['catergory'];
		require_once PATH.'/models/tintucmodel.php';
		$result = new tintucMd;
		$result -> addca($catergory);
		if(isset($result))
		{
			$message = "Them thanh cong!";
		}
		else
		{
			$message = "Them that bai";
		}
	}
	require_once PATH.'/views/viewaddca.php';
}

function addtintuc() //Thêm tin tức
{
	require_once PATH.'/models/tintucmodel.php';
	$result = new tintucMd;
	if(isset($_POST['oki']))
	{	
		$title = $_POST['title'];
		$content = $_POST['content'];
		$categoryid = $_POST['select'];
		$result -> addtintuc($title,$content,$categoryid);
		if(isset($result))
		{
			$message = "Thêm thành công<a href='index.php?h=tintuc'>Trang Tin</a>";
			//echo $result;
		}
		else
		{
			$message = "Thêm thất bại";
		}
	}
	
	$data = $result->selectca();
	require_once PATH.'/views/viewaddtintuc.php';
}
function allnews()//Tất cả các loại tin tức
 {
 	require_once PATH.'/models/tintucmodel.php';
 	$result = new tintucMd;
 	$data = $result->alltintuc();
 	// phan trang
		// lay du lieu tat ca cac tin tuc
		// dem xem co tat ca bao nhieu tin tuc
		$countContents = count($data);
		// tinh so trang
		$pageNumbers = ceil(($countContents/10)); // 10 la 10 tin tuc tren 1 trang va lam tron len
		
		
		// khong lay duoc bien $page, $page = 1
		// bien $page nho hon 1 va lon hon $pageNumbers , $page = 1;
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		if (!isset($page) || $page < 0 || $page > $pageNumbers)
		{
			$page = 1;
		}
		
		// limitStart la bien thu tu bat dau lay (ko phai la id, ma la dem den do thi bat dau lay)
		// page = 1 => limitStart = 0 => limitEnd = 9;
		// page = 2 => limitStart = 10 => limitEnd = 19;
		// page = 3 => limitStart = 20 => limitEnd = 29;
		if ($page == 1)
		{
			$limitStart = 0;
		}
		else
		{
			$limitStart = $page*10-10;
		}
		$data = $result->getContentOnPage($limitStart);
 	require_once PATH.'/views/viewalltintuc.php';
 }

 function edittintuc()// Sửa loại tin tức
 {
 	require_once PATH.'/models/tintucmodel.php';
 	$id = $_GET['id'];
 	$result = new tintucMd;

 	if(isset($_POST['oki']))
 	{
 		$title = $_POST['title'];
		$content = $_POST['content'];
		$categoryid = $_POST['select'];
		$result -> edittintuc($title,$content,$categoryid,$id);
		$message = TRUE;
 	}
 	
 	$data = $result->viewtintuc($id);
 	$select = $result->selectca();
 	require_once PATH.'/views/viewedittintuc.php';
 }

function deletetintuc()//Xóa loại tin tức
 {	
 	require_once PATH.'/models/tintucmodel.php';
 	$id = $_GET['id'];
 	$result = new tintucMd;
 	$result->xoatintuc($id);
 	header('location:index.php?h=tintuc&action=allnews');
 } 
 function allcategory()//Tất cả các loại tin tức
 {
 	require_once PATH.'/models/tintucmodel.php';
 	$result = new tintucMd;
 	$data = $result->allca();
 	require_once PATH.'/views/viewallca.php';
 }

 function editcategory()//Sưa loại tin tức
 {
 	require_once PATH.'/models/tintucmodel.php';
 	$cateid = $_GET['id'];
 	$result = new tintucMd;
 	if(isset($_POST['ok']))
 	{
 		$catename = $_POST['namecate'];
 		$result->editca($catename,$cateid);
 		//$message = TRUE;
 	}
 	$data = $result->viewca($cateid);
 	require_once PATH.'/views/vieweditcategory.php';
 }
  function deletecategory()// Xóa loại tin tức
 {	
 	require_once PATH.'/models/tintucmodel.php';
 	$cateid = $_GET['id'];
 	$result = new tintucMd;
 	//$result->alltintuc();
 	//$result->xoatintuc($id);
 	$result->deletecate($cateid);
 	header('location:index.php?h=tintuc&action=allcategory');
 	//require_once PATH.'/views/viewallca.php';
 }

}
 