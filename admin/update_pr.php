<?

$id=$_GET[id];

include "../themes/php/connect/connect.php";

$sql="delete from tb_news where id_news='$id' and type_news='pr' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ ?>
			<script language="javascript" >
			alert("pr is delete");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../admin/news_pr_admin.php'>
	<? }
} else {
	//echo "<h3>�������ö����¹���ʼ�ҹ��</h3>";
}
mysql_close();
?>
