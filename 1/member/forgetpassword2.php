<?
$user_forget=$_POST[user_forget];
if ($user_forget=="") {
	echo "<h3>ERROR : ��سҡ�͡���������ú�Ф�Ѻ<h3>"; exit();
}
include "connect.php";
$sql="select * from tb_member where username='$user_forget' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
$record=mysql_fetch_array($result);
$to=$record[email];
$password=$record[password];
if($num<=0) {
	echo "<h3>ERROR : Username ��������������к���Ҫԡ��Ѻ</h3>";
} else {
	$subject = "�����ʼ�ҹ�ͧ�к���Ҫԡ";
	$message = "���ʼ�ҹ�ͧ Username : $user_forget ���: $password";
	$headers = "From: Member �к���Ҫԡ";
	if (mail($to, $subject, $message, $headers)) {
		echo "<h3>�к��������ʼ�ҹ价ҧ��������º�������Ǥ�Ѻ</h3>";
	} else {
		echo "<h3>�������ö�����ʼ�ҹ价ҧ�������</h3>";
	}
}
mysql_close();
?>