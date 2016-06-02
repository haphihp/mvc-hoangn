
<?php 
if(isset($showerror))
{
foreach($showerror as $value) {
	echo $value;
}
}
elseif(isset($message))
{
 echo $message; 
}
 ?>
<div class="container">
<div class="table-responsive"> 
<table class="table" >
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Trang Đăng Ký</td>
	</tr>
	<tr>
	<td >USERNAME</td>
	<td><input type="text" name="username" autofocus="autofocus" size="30"></td>
	</tr>
	<tr>
	<td >PASSWORD</td>
	<td><input type="password" name="password" autofocus="autofocus" size="30"></td>
	</tr>
	<tr>
	<td >EMAIL</td>
	<td><input type="email" name="email" autofocus="autofocus" size="30"></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="ok" value="ĐĂNG KÝ"></td>
	</tr>
</form>
</table>
</div>
</div>
<p>Neu bạn đã đăng ký rồi. Đăng nhập ở đây<a href='index.php?h=user&action=signin'>ĐĂNG NHẬP</a></p>
