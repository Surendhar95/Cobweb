<?php
try{
	
include("connect.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
session_start();
// $_SESSION['knosys']=$_POST['knosys'];
// $_SESSION['g_id']=$_POST['g_id'];
// $_SESSION['user_name']=$_POST['username'];
$_SESSION['g_id'] = '111';
$_SESSION['user_name'] = 'xxx';
	if((!isset($_SESSION['g_id'])))
{
	echo "session expired";
	header("Location:http://www.gyanith.org");
}

else{ 
$userid=$_SESSION['g_id'];
$username=$_SESSION['user_name'];
$stmt=$db->prepare("SELECT * FROM profile WHERE UserId=:userid");
$stmt->bindParam(':userid',$userid,PDO::PARAM_STR);
$stmt->execute();
$result=$stmt->fetchColumn();
$stmt1=$db->prepare("SELECT * FROM disqualify WHERE UserId=:userid");
$stmt1->bindParam(':userid',$userid,PDO::PARAM_STR);
$stmt1->execute();
$result1=$stmt1->fetchColumn(0);

if($result!=NULL && $result1==NULL)
{
	
	header("Location:mod2.php");
}
if($result==NULL)
{
	$db->exec("INSERT INTO profile(UserId, Name,Starttime) VALUES ('$userid','$username',CURRENT_TIMESTAMP)");
	$db->exec("INSERT INTO board(UserId, Name, AnsNo, Time, Attempts) VALUES ('$userid','$username','0',CURRENT_TIMESTAMP,'0')");
	header("Location:mod2.php");
}
if($result1!=NULL){

	header("Location:disqualify.php");
}
}
}
catch(PDOException $e)
	{
		$e->getMeassage();
	}
		?>