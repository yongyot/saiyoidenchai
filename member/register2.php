<? 
include "../connect.php"; 
include "../chktype.php";
include "../function.php";

$name_reg=$_POST[name_reg];
$surname_reg=$_POST[surname_reg];
$idcode_reg=$_POST[idcode_reg];
$user_reg=$_POST[user_reg];
$email_reg=$_POST[email_reg];
$pass_reg=$_POST[pass_reg];
$pass_reg2=$_POST[pass_reg2];
$valid=$_POST[valid];

$date_reg=date("Y-m-d");


if ($user_reg=="" or $pass_reg=="" or $email_reg=="" ) {
	{ ?>
		<script language="javascript" >
		alert("กรุณากรอกข้อมูลให้ครบ");
		window.history.back();
		</script>
	<? } 
	exit();
}

if ($valid!="XXbCA") {
	{ ?>
		<script language="javascript" >
		alert("worng chaptha");
		window.history.back();
		</script>
	<? } 
	exit();
}

if ($pass_reg!=$pass_reg2) {
	{ ?>
		<script language="javascript" >
		alert("password not match");
		window.history.back();
		</script>
	<? } 
	exit();
}

if (!checkemail($email_reg)) {
	{ ?>
		<script language="javascript" >
		alert("กรุณาตรวจสอบอีเมล์");
		window.history.back();
		</script>
	<? }
	exit();
}

if ($idcode_reg!= 'XXbCA' ) {
	{ ?>
		<script language="javascript" >
		alert("Worng Chapta Code");
		window.history.back();
		</script>
	<? }
	exit();
}

$sql="select * from tb_member where username='$user_reg' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num>0) {
	{ ?>
		<script language="javascript" >
		alert("Username มีอยู่แล้วในระบบ");
		window.history.back();
		</script>
	<? }
	 exit();
}
$sql="insert into tb_member values('','$name_reg','$surname_reg','$user_reg','$pass_reg',
'$email_reg','$idcode_reg','S','$date_reg')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("บันทึกข้อมูลเรียบร้อยแล้ว");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }
} else {
	{ ?>
			<script language="javascript" >
			alert("ไม่สามารถบันทึกลงฐานข้อมูลได้");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }
}
mysql_close();
?>