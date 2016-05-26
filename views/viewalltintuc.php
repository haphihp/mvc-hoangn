<!DOCTYPE html>
<html>
<head>
	<title>XEM TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
    <div class="example">
    <div class="container">
            <div class="row">
                <h2>Trang Tin</h2>
                <table class="table table-hover">
                        <tr>
                            <td>ID</td>
                            <td>Category</td>
                            <td>Title</td>
                            <td>Content</td>
                            <td>Sửa</td>
                            <td>Xóa</td>
                     </tr>
<?php foreach ($data as $value): ?>
	<tr>
		<td ><?php echo $value['id'];?></td>
		<td ><?php echo $value['catename'];?></td>
		<td ><?php echo $value['title'];?></td>
		<td ><?php echo $value['content'];?></td>
		<td ><a href="index.php?h=tintuc&action=edittintuc&id=<?php echo $value['id']?>">SỬA</a></td>
		<td ><a href="index.php?h=tintuc&action=deletetintuc&id=<?php echo $value['id']?>">XÓA</a></td>
	<tr>
<?php endforeach ?>
</table>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="rol-sm-3">
<a href="index.php?h=tintuc&action=addtintuc" class="btn btn-primary btn-xs">Thêm tin tức</a>
<a href="index.php?h=tintuc&action=addca" class="btn btn-info btn-xs" >Thêm Category</a>
<a href="index.php?h=tintuc&action=allcategory" class="btn btn-warning btn-xs">Category</a>
<a href="index.php?h=user&action=destroy" class="btn btn-default btn-xs">ĐĂNG XUẤT</a>
</div>
</div>
</div>




