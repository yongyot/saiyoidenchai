<?
$id_del=$_GET[id_del];

include "connect.php";
$sql="delete from tb_member where id='$id_del' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ź�������͡�ҡ�к����º�������Ǥ�Ѻ</h3>";
	echo "[ <a href=view.php>��Ѻ˹����ѡ</a> ] ";
} else {
	echo "<h3>�������öź���������Ѻ</h3>";
}
mysql_close();
?>