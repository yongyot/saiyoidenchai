<?
include "chksession.php";
$oldpass=$_POST[oldpass];
$newpass=$_POST[newpass];
$newpass2=$_POST[newpass2];

if ($oldpass=="" or $newpass=="" or $newpass2=="" or $newpass<>$newpass2) {
	echo "<h3>ERROR : ��سҡ�͡���������ú�Ф�Ѻ<h3>"; 	exit();
}
include "connect.php";
$sql="select * from tb_member where username='$sess_username' and password='$oldpass' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num<1) {
	echo "<h3>ERROR : ���ʼ�ҹ��� ���١��ͧ��Ѻ </h3>"; 	exit();
}

$sql="update tb_member set  password='$newpass' where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>����¹���ʼ�ҹ���º�������Ǥ�Ѻ</h3>";
	echo "[ <a href=main.php>��Ѻ˹����ѡ</a> ] ";
} else {
	echo "<h3>�������ö����¹���ʼ�ҹ��</h3>";
}
mysql_close();
?>
