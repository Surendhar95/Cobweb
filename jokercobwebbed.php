<html>
	<head>
		<script>
			function res()
  {  
 
  if (document.getElementById('ch').checked)
  {
  document.getElementById('lev').style.visibility = 'hidden';
  }
  if (document.getElementById('ch2').checked)
  {
  document.getElementById('lev').style.visibility = 'visible';
  }

}
</script>
</head>
<body>
<?php
include('connect.php');
	if(isset($_POST['submit'])){
		//$db = new PDO("mysql:host=localhost;dbname=treasurehunt", 'root', '');
		
				$choose=$_POST['choose'];
				$level=$_POST['level'];
				if($choose=="all")
				$sql="select * from board ORDER BY AnsNo DESC,Time ASC,Attempts ASC";
				else
				$sql="select * from board where AnsNo='$level' ORDER BY AnsNo DESC,Time ASC,Attempts ASC";
				$result = $db->query($sql);
				if(!$result)
				{
				die("Data selection error".$sql);
				}
				?>
				<table border="1" style="border-collapse:collapse">
				<tr> 
					<td>SNo.</td>
					<td>Userid</td>
					<td>Name</td>
					<td>Ans</td>
					<td>Time</td>
					<td>Attempts</td>
				<?php
				$i=0;
				while ($row = $result->fetch(PDO::FETCH_ASSOC))
				{
					$i++;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['UserId']; ?> </td>
					<td><?php echo $row['Name']; ?> </td>
					<td><?php echo $row['AnsNo']; ?> </td>
					<td><?php echo $row['Time']; ?> </td>
					<td><?php echo $row['Attempts']; ?> </td>
				</tr>
				<?php
				
				}
	}
	else{
?>
<form method="POST">
<input  type="radio" name="choose" value="all" id="ch" onchange="res()" required> All<br>
<input type="radio" name="choose" value="level" id="ch2" onchange="res()"  required>Level<br>
<div id="lev">
LEVEL: <input type="text" name="level" >
</div>
<br>
<input type="submit" name="submit" value="submit">
</form>
<?php
}
?>