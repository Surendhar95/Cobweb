<!DOCTYPE html>
<html lang="en">
<head> 
	<title>CobWeb</title>
<meta charset="utf-8"/>
<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 </head> 
<body  background='images/bg1.png'  style="background-repeat: no-repeat;background-size:cover; " >
	<div class='container-fluid'>
		<div class="row" style="top:0px">
<div class="col-sm-12 col-md-12 col-lg-12">
<img src="header-130.png" width=100% >
</div>
</div>
<h2 style="text-align:center;color:white">Leaderboard<h2>
	
	<div class='row'>
		<div class='col-sm-3 col-md-3'>

		</div>
		<div class='col-sm-6 col-md-6'>
<center>
<table class=" table  table-hover table-bgordered table-stripped"  style="width:300px">                  
<center>
<thead style="font-size:18px" >
<tr style='background-color:grey' class="">
<th  width=10%>Place</th>
<th width=10%>UserId</th>
<th width=10%>UserName</th>
<th width=10%>Questions</th>
<tr>
</thead>
</center>
<?php
try{
include("connect.php");
//
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$stmt=$db->prepare("SELECT * FROM board ORDER BY AnsNo DESC,Time ASC,Attempts ASC");
$stmt->execute();
$result=$stmt->fetchAll();
$stmt1=$db->prepare("SELECT * FROM board WHERE UserId=? ");
$stmt1->bindParam(1,$userid,PDO::PARAM_STR,5);
$stmt1->execute();
session_start();
$userid=$_SESSION['user_id'];
//echo $result1['UserId'];
$i=0;                    
$j;
$ansno;

foreach($result as $row)
{
	$i++;
	if($row['UserId']==$userid){
		$username=$row['Name'];
		$ansno=$row['AnsNo'];
		$j=$i;
	}
	if($i<11){

	echo"<center>";
	echo"<tbody style='font-size:15px'>";
	echo"<tr>";
	echo"<td  style='background-color:lightgrey;text-align:center;color:black;'><b>".$i."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['UserId']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Name']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:;'><b>".$row['AnsNo']."</b></td>";
	echo"<tr >";
	echo"</tbody>";
	echo"</center>";
	}
	
}
echo"
</table>
</center>
</div>";
?>
</br>

	
<div class=' col-sm-3 col-md-3' >
	<center>
<div style='background-color:lightgrey'>
	<center>
		<table>
		<tr> 
			<td ><font size='4px'><b>User ID </b></font></td>
			<td ><font size='4px'>: <?php echo $userid ?> </font></td>
		</tr>
		<tr>
			<td ><font size='4px'><b>User Name </b></font></td>
			<td ><font size='4px'>: <?php echo $username ?> </font></td>
		</tr>
		<tr>
			<td ><font size='4px'><b>Standing </b></b></font></td>
			<td ><font size='4px'>: <?php echo $j ?> </font></td>
		</tr>
		<tr>
			<td ><font size='4px'><b>Questions solved </b> </font></td>
			<td ><font size='4px'>: <?php echo $ansno ?> </font></td>
		</tr>
		</table>

	
	</center>
	</div>
</center>
</div>
	
</div>


	<?php
}
catch(PDOException $e)
	{
		$e->getMeassage();
	}?>

<!-- <div class="row">
	<div class="col-md-2 col-sm-2"> 
	</div>
<div class="col-md-8 col-sm-8"> 
<div class="jumbotron" style="background-color:grey">
<p></p>
</div>
</div> -->

</div>
</center>
</div>
</body>
</html>