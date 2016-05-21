<?

$id=$_GET[id];

include "../themes/php/connect/connect.php";

$sql="delete from tb_news where id_news='$id' and type_news='people' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("pr is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../admin/news_people_admin.php'>
	<? }
} else {
	//echo "<h3>äÁèÊÒÁÒÃ¶à»ÅÕèÂ¹ÃËÑÊ¼èÒ¹ä´é</h3>";
}
mysql_close();
?>
