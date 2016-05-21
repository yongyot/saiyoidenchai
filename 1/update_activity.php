<?

$id=$_GET[id];

include "connect.php";

$sql="delete from tb_news where id_news='$id' and type_news='activity' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("activity is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=news_activity_admin.php'>
	<? }
} else {
	//echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
}
mysql_close();
?>
