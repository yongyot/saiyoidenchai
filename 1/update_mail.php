<?

$id=$_GET[id];

include "connect.php";

$sql="delete from tb_mail where id_mail='$id' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("mail is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=mail_admin.php'>
	<? }
} else {
	//echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
}
mysql_close();
?>
