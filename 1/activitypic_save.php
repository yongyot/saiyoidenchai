<? 
include "connect.php"; 
include "chktype.php";
include "function.php";

$ref1=$_POST[ref1];
$ref2=$_POST[ref2];
echo $type_img=$_GET[type];

$date_reg=date("Y-m-d");

$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];



if ($fileupload) {
	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg"  or $lastname=="png" ) {
		copy($fileupload,"../images/news/".$fileupload_name);
	


echo $fileupload_name;
echo $ref1;	
	
$sql="update tb_news_img set img1='$fileupload_name' ,
url1='$ref1' ,
url2='$ref2'
 where type_img='$type_img' ";
mysql_db_query($dbname,$sql);
	
	/////////////////
	if($_FILES['fileupload2']['name']!=''){include "add_photo2.php";}
	/////////////////	
	
	
	{ ?>
			<script language="javascript" >
			alert("Complete .....");
			</script>
			<META HTTP-EQUIV='refresh'content='0;URL=../GUIDECLIP/guide/homepic.php'>
	<? }

	
	
	} else{
		
	}
	unlink($fileupload);
} else {

}



?>