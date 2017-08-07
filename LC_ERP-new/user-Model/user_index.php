<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="top">
			<img class="titleImg" src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50">
		<a href="../Controller/log_logout.php">
			<i id="topIcon" class="material-icons" >exit_to_app</i>
		</a>
		<a href="#">
			<i id="topIcon" class="material-icons">notifications</i>
		</a>
		<a href="../admin-Model/admin_index.php">
			<i id="topIcon" class="material-icons">https</i>
		</a>
	</div>
<!--    上欄 TOP 結束        -->

	<div class="down">
<!--     左欄 LEFT 開始     -->
		<div class="left">
			<div class="left-top">
				<p class="left-top-title">一般員工</p>
			</div>
<!--    左上欄 LEFT-TOP 結束    -->
			<div class="left-bottom">
				<div class="left-title" >
					<a href="user_profile.php" style="margin:auto 20px">個人資料</a>
				</div>
				<div class="left-title" >
					<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
				</div>
				<div class="left-title" style="background-color:#FFDDAA">
					<p style="margin:auto 20px">行事曆</p>
				</div>
				<div class="left-title">
					<a href="user_news.php" style="margin:auto 20px">公佈欄</a>
				</div>
				<div class="left-title">
					<a href="#" style="margin:auto 20px">打卡資訊</a>
				</div>
				<div class="left-title">
					<p style="margin:auto 20px">表單申請</p>
				</div>
					<div  class="left-list">
						<a href="user_leave.php" style="margin:auto 35px">請假申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip.php" style="margin:auto 35px">出差申請</a>
					</div>
					<div class="left-list">
						<a href="user_overtime.php" style="margin:auto 35px">加班申請</a>
					</div>
					<div class="left-list">
						<a href="user_bTrip_list.php" style="margin:auto 35px">差勤明細</a>
					</div>
				<div class="left-title">
					<a href="#" style="margin:auto 20px">員工訓練</a>
				</div>
			</div><!--左下 LEFT-BOTTOM 結束 -->
		</div><!--左 LEFT 結束 -->
<!--    右欄 RIGHT 開始     -->
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">行事曆</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">

			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->

		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
