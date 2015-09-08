<?php

$user="K11";
session_start();
$_SESSION['phone']=12345;
$_SESSION['user_id']=$user;
header("Location:treasurehunt.php");
//header("Location:mod2.php");
/*<form action="mod2.php" method="post">
<input type="submit" name="submit"></input>
</form>*/

?