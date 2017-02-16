

<?php
try{
$host='mysql:dbname=treasurehunt;host=localhost;';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'connected succes';
}

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>