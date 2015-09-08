<?php

try{
include("connect.php");
include('lib/password.php');
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
//$con=new PDO("mysql:host=$host;dbname=$dbase1",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
session_start();
$userid=$_SESSION['user_id'];
if(isset($_REQUEST["submit"]))
{
	if($_REQUEST['ans']!=null)
	{
		echo "nice<br/>";
		$ans_no=$_SESSION['ans_no'];
		$SALT="*k^@$%&#!$";
		function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_ansNo = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_ansNo;
	}
	$ans_no=decrypt($ans_no,$SALT);
		//echo $ans_no;
		$crypt;
		
		$ans1=$_SESSION['knosys'];
		
		$ans_submitted=$_REQUEST['ans'];
		
		$userid="'".$userid."'";

		if($ans_no == 2){
			if($ans_submitted == $ans1)
			{

				$crypt=1;
			}
			else{
				$crypt=0;
				}
				$ans_no="'".$ans_no."'";
			}
			
		/*$crypt=md5($ans_submitted);
		$crypt=sha1($crypt);*/
		else
		{

		$ans_no="'".$ans_no."'";
		$stmt1=$db->prepare("SELECT * FROM answers WHERE No=".$ans_no);
		
		//$stmt1->bindParam(1,$ans_no,PDO::PARAM_INT);
		$stmt1->execute();
		$check_ans=$stmt1->fetchColumn(1);
		//}
		$crypt=password_verify($ans_submitted,$check_ans);
	}	
		
		$stmt=$db->prepare("SELECT * FROM board WHERE UserId=?");
		$stmt->bindParam(1,$_SESSION['user_id'],PDO::PARAM_STR,10);
		$stmt->execute();		
		$attempts=$stmt->fetchColumn(4);
		$attempts++;
		/*echo $check_ans;
		echo $ans_submitted;*/
		
		$db->exec("UPDATE board SET Attempts= '$attempts'  WHERE UserId=".$userid);
		
		if($crypt)				//check for match
		{
			
			echo "Right!";
			$db->exec("UPDATE board SET Time= CURRENT_TIMESTAMP WHERE UserId=".$userid);
			$db->exec("UPDATE board SET AnsNo = ".$ans_no." WHERE UserId=".$userid);
			header("Location:meme1.php");
		}
		else
		{
			
			echo "Wrong :/";
			//$db->exec("UPDATE board SET Attempts= '$attempts'  WHERE UserId=".$_SESSION['user']);
			$db->exec("INSERT INTO entries(AnsNo,UserId,Entries,Time) VALUES (".$ans_no.",".$userid.",'$ans_submitted',CURRENT_TIMESTAMP)");
			
			header("Location:meme2.php");
		}
	}

else
	{
		echo "Answer field cannot be empty";
		echo '<META http-equiv="refresh" content="2;URL=http://localhost:1234/treasure/mod2.php">';
	}
}

else{
	header("Location:mod2.php");
	}
	}
	catch(PDOException $e)
	{
		$e->getMeassage();
	}
	
?>