<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$o_name=$_SESSION['name'];
$o_date=$_POST['o_date'];
$b_start=$_POST['b_start'];
$o_end=$_POST['o_end'];
$o_hrs=$_POST['o_hrs'];
$o_phrs=$_POST['o_phrs'];
$o_state=$_POST['o_state'];
$o_comment=$_POST['o_comment'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `overtime_apply` (o_name,o_date,o_start,o_end,o_hrs,o_phrs,o_state,o_comment) 
    VALUES ('$o_name','$o_date','$o_start','$o_end','$o_hrs','$o_phrs','$o_state','$o_comment');";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location:user_overtime_list.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>