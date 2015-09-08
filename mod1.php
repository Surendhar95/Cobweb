<?php

try{
$db=new PDO("mysql:host=localhost;dname=","root","");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
?>
