<? 
include "chktype.php";
?>
<?
	include "connect.php";
	$title_news=$_POST[title_news];
	$description_news=$_POST[description_news];
	
$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

//echo $fileupload;

if ($fileupload) {
	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg"  or $lastname=="png" ) {
		copy($fileupload,"images/photo/".$fileupload_name);	
	}
	}
	
	
//echo $fileupload_name;	
	
	
	
//echo $fileupload_name;		
	
	
$fileupload2=$_FILES['fileupload2']['tmp_name'];
$fileupload2_name=$_FILES['fileupload2']['name'];
$fileupload2_size=$_FILES['fileupload2']['size'];
$fileupload2_type=$_FILES['fileupload2']['type'];

//echo $fileupload;

if ($fileupload2) {
	$array_last=explode(".",$fileupload2_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload2,"images/photo/".$fileupload2_name);	
	}
	}
	
	
//echo $fileupload_name;		


$fileupload3=$_FILES['fileupload3']['tmp_name'];
$fileupload3_name=$_FILES['fileupload3']['name'];
$fileupload3_size=$_FILES['fileupload3']['size'];
$fileupload3_type=$_FILES['fileupload3']['type'];

//echo $fileupload;

if ($fileupload3) {
	$array_last=explode(".",$fileupload3_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload3,"images/photo/".$fileupload3_name);	
	}
	}
	
	
//echo $fileupload_name;	
	
	
$fileupload4=$_FILES['fileupload4']['tmp_name'];
$fileupload4_name=$_FILES['fileupload4']['name'];
$fileupload4_size=$_FILES['fileupload4']['size'];
$fileupload4_type=$_FILES['fileupload4']['type'];

//echo $fileupload;

if ($fileupload4) {
	$array_last=explode(".",$fileupload4_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload4,"images/photo/".$fileupload4_name);	
	}
	}
	
	
//echo $fileupload_name;		
	
	
$fileupload5=$_FILES['fileupload5']['tmp_name'];
$fileupload5_name=$_FILES['fileupload5']['name'];
$fileupload5_size=$_FILES['fileupload5']['size'];
$fileupload5_type=$_FILES['fileupload5']['type'];

//echo $fileupload;

if ($fileupload5) {
	$array_last=explode(".",$fileupload5_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload5,"images/photo/".$fileupload5_name);	
	}
	}
	
	
//echo $fileupload_name;		
	
	
$fileupload6=$_FILES['fileupload6']['tmp_name'];
$fileupload6_name=$_FILES['fileupload6']['name'];
$fileupload6_size=$_FILES['fileupload6']['size'];
$fileupload6_type=$_FILES['fileupload6']['type'];

//echo $fileupload;

if ($fileupload6) {
	$array_last=explode(".",$fileupload6_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload6,"images/photo/".$fileupload6_name);	
	}
	}
	
	
//echo $fileupload_name;		
	
	
$fileupload7=$_FILES['fileupload7']['tmp_name'];
$fileupload7_name=$_FILES['fileupload7']['name'];
$fileupload7_size=$_FILES['fileupload7']['size'];
$fileupload7_type=$_FILES['fileupload7']['type'];

//echo $fileupload;

if ($fileupload7) {
	$array_last=explode(".",$fileupload7_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	if ($lastname=="pdf" or $lastname=="doc" or $lastname=="txt"  or $lastname=="xls" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="zip" or $lastname=="rar" or $lastname=="ppt") {
		copy($fileupload7,"images/photo/".$fileupload7_name);	
	}
	}
	
	
//echo $fileupload_name;		
if ($title_news!="" and $description_news!="") {


$sql="insert into tb_news values('','$title_news','$description_news','$description_news','',
'','','$fileupload_name','$fileupload2_name','$fileupload3_name','$fileupload4_name','$fileupload5_name','$fileupload6_name','$fileupload7_name','activity')";
$result=mysql_db_query($dbname,$sql);

mysql_close();


}	//end if?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข่าวกิจกรรม - ผู้ดูแลระบบ</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	background-position: center top;
	background-attachment:fixed; 
	background-image: url(images/bg_web3.jpg);
	background-repeat: repeat-x;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th valign="top" bgcolor="#FFFFFF" scope="col"><table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th scope="col"><? include "header.php"; ?></th>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <th background="images/bg_line2.jpg" scope="col">&nbsp;</th>
                  </tr>
                </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr valign="top">
                      <th width="5" scope="col"><? include "menu.php"; ?></th>
                      <th scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <th scope="col"><img src="images/news_activity_admin.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th  scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col"><?

include "connect.php";

$sql9="select * from tb_news  where type_news='activity' order by id_news desc  "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
  	$id_news=$record9[id_news];
	$img_news=$record9[img_news];
	$description2_news=$record9[description2_news];
	$description2_news=iconv_substr($description2_news,0,250,"UTF-8");
  
		echo " <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                              <th width='15' scope='col'>&nbsp;</th>
                                              <th width='135' align='center' scope='col'><a href='news_activity.php?id=$id_news'><img src='images/photo/$img_news' width='125' height='90' border='0'/></a></th>
                                              <th width='5' scope='col'>&nbsp;</th>
                                              <th align='left' valign='top' scope='col'>
                                                  <div align='left' class='body1'> <a href='news_activity.php?id=$id_news'>$description2_news</a> </div></th>
                                              <th width='30' align='left' valign='top' scope='col'><a href='update_activity.php?id=$id_news' onclick=\"return confirm(' แน่ใจว่าต้องการลบข่าวกิจกรรมนี้?')\"><img src='images/delete.jpg' border='0' /></a>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            </tr>
                                            <tr>
                                              <td width='30'>&nbsp;</td>
                                              <td width='135' align='center'>&nbsp;</td>
                                              <td width='5'>&nbsp;</td>
                                              <td align='left' valign='top'><div align='left'></div></td>
                                              <td width='30' align='left' valign='top'>&nbsp;</td>
                                            </tr>
											
                                        </table>
										        ";
	  
			  }//end while											
?></th>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th scope="col"><form id="form1" name="form1" method="post" action="news_activity_admin.php" enctype="multipart/form-data">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <th align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                    <th colspan="2" align="left" valign="top" class="body2-head" scope="col">เพิ่มข่าวกิจกรรม</th>
                                  </tr>
                                  <tr>
                                    <th align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                    <th align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                    <th align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                  </tr>
                                  <tr>
                                    <th width="30" align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                    <th align="left" valign="top" class="body1" scope="col">ชื่อเรื่อง : </th>
                                    <th align="left" valign="top" class="body1" scope="col"><input name="title_news" type="text" size="70" maxlength="50" /></th>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">รายละเอียด : </td>
                                    <td align="left" valign="top" class="body1"><textarea name="description_news" cols="55" rows="20"></textarea></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload" type="file" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload2" type="file" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload3" type="file" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload4" type="file" id="fileupload4" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload5" type="file" id="fileupload5" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload6" type="file" id="fileupload6" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td width="30" align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ภาพ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload7" type="file" id="fileupload7" size="47" /></td>
                                  </tr>
                                  <tr align="center">
                                    <td colspan="3" valign="top" class="body1">&nbsp;</td>
                                  </tr>
                                  <tr align="center">
                                    <td colspan="3" valign="top" class="body1"><input type="submit" name="Submit" value="เพิ่มข่าว" /></td>
                                  </tr>
                                </table>
                            </form></th>
                          </tr>
                        </table></th>
                    </tr>
                  </table>                  </td>
              </tr>
              <tr>
                <td><? include "footer.php"; ?></td>
              </tr>
            </table>            
            </th>
        </tr>
      </table>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
