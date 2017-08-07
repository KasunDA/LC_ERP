<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

$e_name_cn=$_POST["e_name_cn"];

try {
        $conn = mysqli_connect($servername,$username ,$password,$dbname);
        if($e_name_cn==NULL)
        {
            $sql = "SELECT * FROM employees";
				    $result = mysqli_query($conn,$sql);
          }
          else{
            $sql = "SELECT * FROM `employees` WHERE e_name_cn='$e_name_cn'";
            $result = mysqli_query($conn,$sql);
          }
        }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>


<style>
  span{
    font-family:Microsoft JhengHei;
    font-size: 20px;
  }
</style>
<html>
<head>
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="top">
		<a href="user_index.php">
			<img src="http://www.lctech.com.tw/wp-content/uploads/bfi_thumb/%E6%9C%AA%E5%91%BD%E5%90%8D-1-%E6%8B%B7%E8%B2%9D-31w65e1o8bhj94p9q5patm@2x.png" width="50" height="50" style="float:left;margin-left:15px">
		</a>
		<a href="user_profile.php">
			<i class="material-icons" style="margin-top:15px;margin-right:15px;margin-left:5px;float:right;font-size:30px;color:#CCC">person</i>
		</a>
		<a href="#">
			<i class="material-icons" style="margin-top:15px;margin-left:5px;margin-right:5px;float:right;font-size:30px;color:#CCC">notifications</i>
		</a>
	</div>
	<div class="down">
		<div class="left">
			<div class="left-top">
				<a href="#" style="line-height:50px;font-family:Microsoft JhengHei;font-size:150%;margin:auto 15px">人資管理</a>
			</div>
			<div><!--leftBottom-->
				<p style="line-height:20px"></p>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list">
						<p style="margin:auto 30px;color:#666666">員工資料列表</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">員工資料修改</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新增員工資料</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<a href="admin_bTrip.php" style="margin:auto 30px;color:#666666">差勤審核</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">差勤明細</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">公佈欄</p>
					</div>
					<div class="left-list">
						<a href="admin_addNews.php" style="margin:auto 30px;color:#666666">新增公告</a>
          </div>
          <div class="left-list">
            <a href="admin_editNews.php" style="margin:auto 30px;color:#666666">編輯公告</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">新增日程</a>
					</div>
				</div>
				<div>
					<div class="left-title">
						<a href="user_index.php" style="margin:auto 20px">登出人資管理</a>
					</div>
				</div>
			</div>
		</div>
    <div style="float:left;background-color:#CCC;width:0.1%;height:1200px"></div>
    <div class="right">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">員工資料列表</p>
			</div>
			<div><!--rightBottom-->
				<div style="width:100%;height:70px;margin:auto;border-bottom:solid 1px #CCC;">
					<form method="post" action="admin_editEmployee.php" style="float:left;margin:15px">
					<span>請輸入欲編輯的員工姓名：<input type="text" name="e_name_cn" size="15"></span>
					<input class="btn" type="submit" value="Submit" />
					</form>
				</div>
				<div>
					<div>
					<table cellspacing="0">
            <th>刪除</th>
            <th>編輯</th>
						<th>編號</th>
						<th>員工型態</th>
						<th>員工狀態</th>
						<th>工作地點</th>
						<th>中文姓名</th>
						<th>英文姓名</th>
						<th>分機號碼</th>
						<th>電話</th>
						<?php
						while($row = mysqli_fetch_array($result)) {
						?>
						<tr>
            <td><a href="admin_delete_user.php?e_sn=<?php echo $row["e_sn"]; ?>"><i class="material-icons" style="font-size:20px">clear</i></a></td>
            <td><a href="admin_update_user.php?e_sn=<?php echo $row["e_sn"]; ?>"><i class="material-icons" style="font-size:20px">border_color</i></a></td>
						<td><?php echo $row["e_sn"]; ?></td>
						<td><?php echo $row["e_type"]; ?></td>
						<td><?php echo $row["e_status"];?></td>
						<td><?php echo $row["e_location"];?></td>
						<td><?php echo $row["e_name_cn"];?></td>
						<td><?php echo $row["e_name_en"];?></td>
						<td><?php echo $row["e_extension"]?></td>
						<td><?php echo $row["e_mobile"];?></td>
						</tr>
					<?php } ?>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
