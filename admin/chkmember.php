
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>องค์การบริหารส่วนตำบลไทรย้อย อ.เด่นชัย จ.แพร่</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ที่อยู่:207 หมู่ 2 ตำบล ไทรย้อย อำเภอ เด่นชัย แพร่ 54110
โทรศัพท์:054 501 116">
<meta name="author" content="toptiersoft,toptiersoft.com,yongyot,yongyot.kha,yongyot khamma">
<link rel="shortcut icon" type="image/png" href="themes/images/favicon.ico"/>
</head>
</html>
<?
$user_login=$_POST[user_login];
$pass_login=$_POST[pass_login];

if ($user_login=="" or $pass_login=="") {
	{ ?>
		<script language="javascript" >
			alert("กรุณากรอกข้อมูลให้ครบ");
		window.history.back();
		</script>
	<? }
	exit();
}
include "../themes/php/connect/connect.php";
$sql="select * from tb_member where username='$user_login' and password='$pass_login'";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);

    //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";


if($num<=0) {
	{ ?>
		<script language="javascript" >
			alert("Username หรือ Password ไม่ถูกต้อง");
		window.history.back();
		</script>
	<? }
} else {
	
	session_start();
	$_SESSION[sess_userid]=session_id();
	$_SESSION[sess_username]=$user_login;
	
	$sql2="select * from tb_member where username='$user_login' and password='$pass_login'";
	$result2=mysql_db_query($dbname,$sql2);
	$record2=mysql_fetch_array($result2);
	$type=$record2[username];
	//$type=$record2[memtype];
	{ ?>
			<script language="javascript" >
		alert("ยินดีต้อนรับผู้ดูแลระบบ www.saiyoidenchai.go.th ");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../admin/index.php'>
	<? }
	
	//if($type=="A"){header("Location: ../LMS/admin/admin.php");}
	
	//if($type=="T"){header("Location: ../LMS/teacher/teacher.php");}
	
	//if($type=="S"){header("Location: ../LMS/student/student.php");}
	
	//header("Location: index.php");
}
?>