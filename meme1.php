<!DOCTYPE html>
<html>
<head>
	 <title>CobWeb</title>
	 <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1"/>

	</head>
<body style='background-color:lightblue'>
	<div class="container">
		</br></br></br>
	<?php
	$i=rand(1,5);
	/*$i=1;*/
	
	


if($i==1)
{
echo"<div class='row'>
<div class='col-md-12 col-sm-12'>
<center>
<img  src='Memes/g12.jpg' style='width=300px;height=300px' ></img><br/><br/><br/><br/><br/><br/><br/>
<button type='button' name='next' class='btn btn-primary' style='width:200px ;text-align:center' onClick='Location.href='mod2.php''>Next Question</button>
<h2>Keep going champ!!</h2>
</center>
</div>
</div>";
}
if($i==2){
	echo"<div class='row'>
<div class='col-md-12 col-sm-12'>
<center>
<img src='Memes/g11.jpg' style='width=200px;height=200px'  ></img><br/><br/><br/><br/><br/><br/><br/>
<button type='button' name='next' class='btn btn-primary' style='width:200px ;text-align:center' onClick='Location.href='mod2.php''>Next Question</button>
<h2>Way to Go!!</h2>
</center>
</div>
</div>";
}
if($i==3){
	echo"<div class='row'>
<div class='col-md-12 col-sm-12'>
<center>
<img  src='Memes/g15.jpg' style='width=200px;height=200px'></img><br/><br/><br/><br/><br/><br/><br/>
<button type='button' name='next' class='btn btn-primary' style='width:200px ;text-align:center' onClick='Location.href='mod2.php''>Next Question</button>
<h2>Good Job!!</h2>
</center>
</div>
</div>";
}
if($i==4){
	echo"<div class='row'>
<div class='col-md-12 col-sm-12'>
<center>
<img  src='Memes/g16.png' style='width=200px;height=200px'></img><br/><br/><br/><br/><br/><br/><br/>
<button type='button' name='next' class='btn btn-primary' style='width:200px ;text-align:center' onClick='Location.href='mod2.php''>Next Question</button>
<h2>Great Job!!</h2>
</center>
</div>
</div>";
}
if($i==5){
	echo"<div class='row'>
<div class='col-md-12 col-sm-12'>
<center>
<img  src='Memes/g19.jpg' style='width=200px;height=200px'></img><br/><br/><br/><br/><br/><br/><br/>
<button type='button' name='next' class='btn btn-primary' style='width:200px ;text-align:center' onClick='Location.href='mod2.php''>Next Question</button>
<h2>Nice...!!</h2>
</center>
</div>
</div>";
}
?>

<META http-equiv="refresh" content="2;URL=mod2.php">

<!-- /*
<form action="logout.php" method="post">
<input type="submit" name="" value="Quit Game"></input>
</form> */ -->
</div>
</body>
</html>