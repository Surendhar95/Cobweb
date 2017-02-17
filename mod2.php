
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>CobWeb</title>
<meta charset="utf-8"/>
<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src=""></script>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
</head>
<style>
.name {
    text-align: center;
    position: relative;
    top:-60px;
}
</style>

<?php

try{
include("connect.php");
include('lib/password.php');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
session_start();
$_SESSION['g_id'] = '111';

if(!isset($_SESSION["g_id"]))
{
    echo "session expired";
    header("Location:http://www.knosys.in");
}
//include(mod1.php);
$userid=$_SESSION["g_id"];
$userid='111';
$stmt=$db->prepare("SELECT * FROM board WHERE UserId=?");
$stmt->bindParam(1,$userid,PDO::PARAM_STR,5);
$stmt->execute();


$ansNo=$stmt->fetchColumn(2);       //getting  no of questions solved by user
$ansNo++;  

$stmt=$db->prepare("SELECT * FROM questions WHERE QNo=?");
$stmt->bindParam(1,$ansNo,PDO::PARAM_STR,5);
$stmt->execute();

$quest;
$no;
$img1;
$img2;

while($row = $stmt->fetch())
        {
        $no=$row['QNo'];
        $quest=$row['Question'];
        $imgno=$row['Imgno'];
        $img1=$row['Img1'];
        $img2=$row['Img2'];
        $img3=$row['Img3'];
        }

//echo $no;
$path="terminator/";
$img1=$path.$img1;
$img2=$path.$img2;
$img3=$path.$img3;

//echo $count;
$SALT="*k^@$%&#!$";
function encrypt($data,$key){
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $crypttext = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $data, MCRYPT_MODE_CBC, $iv);
    return bin2hex($iv . $crypttext);
}
$encrypted_ansNo=encrypt($ansNo,$SALT);
//echo $encrypted_ansNo;
$_SESSION['ans_no']=$encrypted_ansNo;


}
catch(PDOException $e)
    {
        $e->getMeassage();
    }
        
?>

</header> 
<body  background='images/bg.gif'  style="overflow:hidden;background-repeat: no-repeat;background-size:cover;background-attachment:fixed; " >
<div class="container-fluid">
    
<div class="row" style="top:0px">
<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
<img src="images/logo.svg" >
</div>
</div>
<div class="name">
<img src='images/name.png' style='width:220px;height:80px;'>
</div>

<?php 
    if($imgno==1)
    {
echo"<div class='row' >";
echo "<div class='' col-sm-12 col-md-12'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src=$img1 style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";
    }
else if($imgno==2)
{
    echo"<div class='row' >";
echo "<div class=' col-sm-6 col-md-6'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src=$img1 style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";

echo "<div class=' col-sm-6 col-md-6'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src=$img2 style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";
}
else if($imgno==3)
{
    echo"<div class='row' >";
echo "<div class=' col-sm-4 col-md-4'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src=$img1 style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";

echo "<div class='col-sm-4 col-md-4'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src='$img2' style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";

echo "<div class='col-sm-4 col-md-4'>" ;

//<!--<div style="text-align: center">-->
echo"<center>";

echo"<img class='img-thumbnail' src='$img3' style='width:220px ;height:220px' /> ";
echo"</center>";

echo"</div>";
}

?>
</div>




<div class="btn-group" role="group" style="position:absolute;top:70px;right:130px;">
<!-- <div style="position:absolute;top:70px;right:137px;"> -->
<a style="color:black;background-color:#5C7079; cursor:hand; "class="btn btn-primary " target= '_blank' type="button" href='http://www.facebook.com/cobweb.knosys' ><b>Forum</b></a>
<a style="color:black;background-color:#5C7079; cursor:hand;" class="btn btn-primary " target= '_blank' type="button" href='leaderboard.php' ><b>Leaderboard</b></a>
<!-- </div> -->
<!-- <div style="position:absolute;top:70px;right:50px;"> -->

<!-- </div> -->
<!-- <div style="position:absolute;top:70px;right:270px;"> -->
<a style="color:black;background-color:#5C7079; cursor:hand; "class="btn btn-primary " target= '_blank' type="button" href='rules.php'><b>Rules</b></a>
<!-- </div> -->
</div>
<div style="position:absolute;top:70px;right:40px;">
    <button style="color:black;background-color:#5C7079; cursor:hand; "class="btn box-shaddow  "  type="button" onClick="location.href='logout.php'" ><b>Logout</b></button>
<!-- </div> -->

</div>
<div style="position:absolute;top:80px;left:220px;"><font size='5px' color='white'><b>Hi <?php echo $_SESSION['user_name'] ?></b></font></div>
<center>
<div class="row"> 
<div class="col-sm-4 ">
</div>
<div class="col-sm-4 ">
<center>
    
<h4 style="color:white"><?php
if($no != 29){
if($no == 23)
    echo "Level: 23a";
else if($no == 24)
    echo "Level: 23b";
else {
echo "Level:" .$no;
}
}
?></h4>
<h3 style="color:white"><?php echo $quest ?></h3>

<?php
if($no != 29){?>
<h3 style="text-align:center;color:black"><b>Answer:</b></h3>
<form  id ="answer" name="answer" action="mod3.php" method="post" autocomplete="off" align="center" >   
<input style=" font-family:oswald;height:33px;font-size:16px" type="text" pattern="[a-z]*{10}" title="No special characters are allowed" placeholder="All text in lowercases only" required style="width:220px ;height:30px" name="ans"></input>
<button style="background-color:#5C7079;cursor:hand" type="submit" class="btn btn-primardy" name="submit"><b><font color="black" size="">Submit</font></b></button>
</form>
<?php } ?>
</center>
</div>
<div class="col-sm-4 ">
</div>
</div>
</div>

</body>
</html>