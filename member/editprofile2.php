<?
include "../function.php";
include "../chktype.php";
include "../connect.php";

$id_member=$_GET[id_student];
$name_reg=$_POST[name_reg];
$surname_reg=$_POST[surname_reg];
$idcode_reg=$_POST[idcode_reg];
$user_reg=$_POST[user_reg];
$email_reg=$_POST[email_reg];
$pass_reg=$_POST[pass_reg];


$date_reg=date("Y-m-d");


if ($pass_reg=="" or $email_reg=="" ) {
	{ ?>
		<script language="javascript" >
		alert("กรุณากรอกข้อมูลให้ครบ");
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


$sql="update tb_member set 
password='$pass_reg',
email='$email_reg' where id_member='$id_members' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {

		if($memtypes=='A'){{ ?>
			<script language="javascript" >
			alert("แก้ไขข้อมูลเรียบร้อยแล้ว");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}
		if($memtypes=='T'){{ ?>
			<script language="javascript" >
			alert("แก้ไขข้อมูลเรียบร้อยแล้ว");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}
		if($memtypes=='S'){{ ?>
			<script language="javascript" >
			alert("แก้ไขข้อมูลเรียบร้อยแล้ว");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}
		
} else {

		if($memtypes=='A'){{ ?>
			<script language="javascript" >
			alert("ไม่สามารถแก้ไขข้อมูลได้");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}
		if($memtypes=='T'){{ ?>
			<script language="javascript" >
			alert("ไม่สามารถแก้ไขข้อมูลได้");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}
		if($memtypes=='S'){{ ?>
			<script language="javascript" >
			alert("ไม่สามารถแก้ไขข้อมูลได้");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../index.php'>
	<? }}

}
mysql_close();
?>