<?

$id=$_GET[id];

include "../themes/php/connect/connect.php";

$sql="update tb_dev set  dev='' where id='$id' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("develop is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=dev_admin.php'>
	<? }
} else {
	//echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
}
mysql_close();
?>
