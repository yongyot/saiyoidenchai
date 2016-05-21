<?

$id=$_GET[id];

include "../themes/php/connect/connect.php";

$sql="delete from tb_news where id_news='$id' and type_news='fund' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("fund is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=news_fund_admin.php'>
	<? }
} else {
	//echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
}
mysql_close();
?>
