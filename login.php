<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>會員登入</title>
		<link rel="stylesheet" href="indexStyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<style>
		fieldset{
			font-family:Microsoft JhengHei;
			width:20%;
			margin:auto;
			padding:20px;
		}
			
		.error{
			color:red;
		}
	</style>
	<body>
		<div class="top">
		<a href="index.php">
			<img src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50" style="float:left;margin-left:15px">
		</a>
		<a href="profile.php">
			<i class="material-icons" style="margin-top:15px;margin-right:15px;margin-left:5px;float:right;font-size:30px;color:#CCC">person</i>
		</a>
		<a href="#">
			<i class="material-icons" style="margin-top:15px;margin-left:5px;margin-right:5px;float:right;font-size:30px;color:#CCC">notifications</i>
		</a>
		<a href="admin_index.php">
			<i class="material-icons" style="margin-top:15px;margin-right:5px;float:right;font-size:30px;color:#CCC">https</i>
		</a>
	</div>
	<div >
		<form method="post" action="checkUser.php">
			<?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
			<fieldset>
			<legend>員工登入</legend>
			<div>
			編號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button class="btn" type="submit" >登入</button>
			</fieldset>
		</form>
	</div>
	</body>
</html>
