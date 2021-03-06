<?php session_start(); ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
    $sql = "SELECT * FROM `employees` WHERE e_sn = '".$_SESSION['temp']."'";
    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
<html>
<head>
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
 		table{
   		width:95% ;
   		margin:auto;
   		margin-top:0px; 
		}
		th{
		padding:0;
		margin:0;
		background-color:#F4A460;
		text-align:center;
		font-size:20px;
		line-height:40px ;
		width:15%;

		}
		td{
			text-align: left;
			padding:0;
			width:15%;
		}
		tr{
			height:38px;

		}
</style>
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
				<p style="line-height:20px;border-right:solid 1px #CCC"></p>
				<div>
					<div class="left-title">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list">
						<a href="admin_employee.php" style="margin:auto 30px;color:#666666">員工資料列表</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 30px;color:#666666">員工資料修改</a>
					</div>
					<div class="left-list">
						<a href="admin_addEmployee.php" style="margin:auto 30px;color:#666666">新增員工資料</a>
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
		<div class="right" style="height:auto">
			<div class="right-top">
				<p style="line-height:50px;font-family:Microsoft JhengHei;font-size:25px;margin:auto 15px">新增員工資料</p>
			</div>
			<div style="border-left:solid 1px #CCC;margin-top:0px;padding-top:30px">
				<table>
					<?php
						while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<th colspan="6">員工基本資料</th>
					</tr>	
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>人員編號：<?php echo $row["e_sn"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>到職日期：<?php echo $row["e_date"];?></td>
	<!-- 人員大頭貼  --><td colspan="2" rowspan="4"></td>	
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>中文姓名：<?php echo $row["e_name_cn"];?></td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>性別：<?php echo $row["e_sex"];?></td>
						<td ><i class="fa fa-star" style="font-size:17px;color:red"></i>手機：<?php echo $row["e_mobile"];?></td>
						
						
						
						
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>英文姓名：<?php echo $row["e_name_en"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>ID：<?php echo $row["e_personalID"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>婚姻：<?php echo $row["e_marriage"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>血型：<?php echo $row["e_blood"];?></td>
					</tr>
					<tr>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>通訊地址：<?php echo $row["e_address"];?></td>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>郵件信箱：<?php echo $row["e_email"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>生日：<?php echo $row["e_birth"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人：<?php echo $row["e_emergency"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人手機：<?php echo $row["e_em_mobile"];?></td>
					</tr>
					<tr>
						<th colspan="6" style=" ;"><i class="fa fa-star" style="font-size:17px;color:red"></i>學歷</th>
					</tr>
						<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">最高學歷</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">學校</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">科系</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">畢/肄/在學</th>
					</tr>
<!-- 學歷表格  -->	<tr>
						<td ><?php echo $row["e_edu"];?></td>
						<td ><?php echo $row["e_edu_high"];?></td>
						<td ><?php echo $row["e_edu_dep"];?></td>
						<td ><?php echo $row["e_edu_start"]?></td >
						<td ><?php echo $row["e_edu_end"]?></td >
						<td ><?php echo $row["e_edu_gra"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>經歷</th>
					</tr>
					<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">公司名稱</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">職稱</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">離職原因</th>
					</tr>
<!-- 經歷表格1  -->	<tr>

						<td ><?php echo $row["e_exp_com1"];?></td>
						<td ><?php echo $row["e_exp_posi1"];?></td>
						<td ><?php echo $row["e_exp_start1"];?></td>
						<td ><?php echo $row["e_exp_end1"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason1"];?></td>
					</tr>
					<tr>
<!-- 經歷表格2  -->						<td ><?php echo $row["e_exp_com2"];?></td>
						<td ><?php echo $row["e_exp_posi2"];?></td>
						<td ><?php echo $row["e_exp_start2"];?></td>
						<td ><?php echo $row["e_exp_end2"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason2"];?></td>
					</tr>
					<tr>
<!-- 經歷表格3  -->		<td ><?php echo $row["e_exp_com3"];?></td>
						<td ><?php echo $row["e_exp_posi3"];?></td>
						<td ><?php echo $row["e_exp_start3"];?></td>
						<td ><?php echo $row["e_exp_end3"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason3"];?></td>
					</tr>
					<tr>
<!-- 經歷表格4  -->		<td ><?php echo $row["e_exp_com4"];?></td>
						<td ><?php echo $row["e_exp_posi4"];?></td>
						<td ><?php echo $row["e_exp_start4"];?></td>
						<td ><?php echo $row["e_exp_end4"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason4"];?></td>
					</tr>
					<tr>
<!-- 經歷表格5  -->		<td ><?php echo $row["e_exp_com5"];?></td>
						<td ><?php echo $row["e_exp_posi5"];?></td>
						<td ><?php echo $row["e_exp_start5"];?></td>
						<td ><?php echo $row["e_exp_end5"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason5"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>技能專長</th>
					</tr>	
					<tr>
						<td colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>認證資格:<?php echo $row["e_license"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>在職資料</th>
					</tr>
					<tr>
						<th colspan="2">員工狀態</th>
						<th>員工型態</th>
						<th>工作地點</th>
						<th colspan="2">分機號碼</th>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>:<?php echo $row["e_status"];?></td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>:<?php echo $row["e_type"];?></td>
						<td ><i class="fa fa-star" style="font-size:17px;color:red"></i>:<?php echo $row["e_location"];?></td>
						<td colspan="2">:<?php echo $row["e_extension"];?></td>
					</tr>
					<?php } ?>
				</table>
				<a href="admin_index.php"><button style="margin:20px" class="btn" >確認新增</button></a>
			</div>

		</div>
	</div>
</body>
</html>