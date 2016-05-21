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
include "../connect.php";
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
			alert("ยินดีต้อนรับเข้าสู่ www.saiyoidenchai.org ");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }
	
	//if($type=="A"){header("Location: ../LMS/admin/admin.php");}
	
	//if($type=="T"){header("Location: ../LMS/teacher/teacher.php");}
	
	//if($type=="S"){header("Location: ../LMS/student/student.php");}
	
	//header("Location: index.php");
}
?>