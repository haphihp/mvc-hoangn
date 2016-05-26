
<?php if(isset($showerror))
{
foreach($showerror as $value) {
	echo $value;
}
}
?>
<div class="container">
<form class="form-inline" role="form" method="post" action="">
  <div class="form-group">
    <label for="usr">USERNAME</label>
    <input type="text" name="username" class="form-control" id="usr" >
  </div>
  <div class="form-group">
    <label for="pwd">PASSWORD</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  <button type="submit" name="oki" class="btn btn-default">LOGIN</button>
  <div class="form-group"><a href='index.php?h=user&action=signup' class="btn btn-default">ĐĂNG KÝ</a></div>
</form>
</div>
