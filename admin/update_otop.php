<?

$id=$_GET[id];
$mode=$_GET[mode];
include "../themes/php/connect/connect.php";

$sql="delete from tb_news where id_news='$id' and type_news='$mode' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	{ 
	
	if($mode== "otop"){
	
	?>
			<script language="javascript" >
			alert("pr is delete");
			</script>
			<META HTTP-EQUIV='refresh'content="0;URL=../admin/news_otop_admin.php?mode=otop">
	<?
	
	
	
	
	
	
}else if($mode== "travel"){
	?>
			<script language="javascript" >
			alert("pr is delete");
			</script>
			<META HTTP-EQUIV='refresh'content="0;URL=../admin/news_otop_admin.php?mode=travel">
	<?
}
else if($mode== "activitycenter"){
	?>
			<script language="javascript" >
			alert("กิจกรรมศูนย์ฯ is delete");
			</script>
			<META HTTP-EQUIV='refresh'content="0;URL=../admin/news_otop_admin.php?mode=activitycenter">
	<?
}

else if($mode== "tradition"){
	?>
			<script language="javascript" >
			alert("pr is delete");
			</script>
			<META HTTP-EQUIV='refresh'content="0;URL=../admin/news_otop_admin.php?mode=tradition">
	<?
	
	}
	
	 }
} else {
	//echo "<h3>äÁèÊÒÁÒÃ¶à»ÅÕèÂ¹ÃËÑÊ¼èÒ¹ä´é</h3>";
}
mysql_close();
?>
