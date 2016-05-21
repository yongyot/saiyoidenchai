<?

$id=$_GET[id];

include "connect.php";

$sql="update tb_youtube set  youtube='' where id='$id' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("youtube is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=youtube_admin.php'>
	<? }
} else {
	//echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
}
mysql_close();
?>
