<? 
include "chktype.php";
?>
<?
	include "connect.php";
	
$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

//echo $fileupload;

if ($fileupload) {
	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
		if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg"  or $lastname=="png" or $lastname=="pdf" or $lastname=="txt" or $lastname=="doc" or $lastname=="docx" or $lastname=="ppt" or $lastname=="xls" or $lastname=="xlsx") {
		copy($fileupload,"images/file/".$fileupload_name);	
	}
	}
//echo $fileupload_name;	
	
//echo $fileupload_name;	
if ($fileupload_name!="") {

$sql9="select * from tb_dev  where  dev ='' limit 1"; 
$result9=mysql_db_query($dbname,$sql9);                             
                                
  while($record9=mysql_fetch_array($result9)) {
	$id_add=$record9[id];
  }

		


$sql="update tb_dev set  dev='$fileupload_name' where id='$id_add' ";
$result=mysql_db_query($dbname,$sql);



}	//end if?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยุทธศาสตร์การพัฒนา</title>
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
                          <th scope="col"><img src="images/dev_bar.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="30" scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col"><?

include "connect.php";

$sql9="select * from tb_dev  where  dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);                                 
  $amount='1';
                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
	$id=$record9[id];
  
		echo "
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <th align='left' scope='col'><p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$dev' target='_blank'>$dev</a></p>&nbsp;</th>
    <th width='10%'align='left' scope='col'><a href='update_dev.php?id=$id' onclick=\"return confirm(' แน่ใจว่าต้องการลบยุทธศาสตร์การพัฒนานี้?')\"><img src='images/delete.jpg' border='0' /></a></th>
  </tr>
</table>   ";
	  $amount++;
			  }//end while	youtube4
			  

			  		  			  			  
			  
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
                            <th scope="col"><form id="form1" name="form1" method="post" action="dev_admin.php" enctype="multipart/form-data">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <th width="11%" align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                                    <th colspan="2" align="left" valign="top" class="body2-head" scope="col">เพิ่มไฟล์ข้อมูล</th>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td width="13%" align="left" valign="top" class="body1">&nbsp;</td>
                                    <td width="76%" align="left" valign="top" class="body1">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">ไฟล์ : </td>
                                    <td align="left" valign="top" class="body1"><input name="fileupload" type="file" size="47" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body1">&nbsp;</td>
                                    <td align="left" valign="top" class="body-color">* สามารถเพิ่มได้สูงสุด 4 ไฟล์ เท่านั้น </td>
                                  </tr>
                                  
                                  <tr align="center">
                                    <td colspan="3" valign="top" class="body1">&nbsp;</td>
                                  </tr>
                                  <tr align="center">
                                    <td colspan="3" valign="top" class="body1"><input type="submit" name="Submit" value="เพิ่มไฟล์" /></td>
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
