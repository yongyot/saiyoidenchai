<? 
include "chktype.php";
?>
<?
include "connect.php";
$add_youtube=$_POST[add_youtube];	  
if($add_youtube!=''){
$sql9="select * from tb_youtube  where  youtube ='' limit 1"; 
$result9=mysql_db_query($dbname,$sql9);                             
                                
  while($record9=mysql_fetch_array($result9)) {
	$id_add=$record9[id];
  }


$sql="update tb_youtube set  youtube='$add_youtube' where id='$id_add' ";
$result=mysql_db_query($dbname,$sql);

} //end if			  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>youtube - ผู้ดูแลระบบ</title>
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
                          <th scope="col"><img src="images/youtube_admin.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="30" scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col"><?

include "connect.php";

$sql9="select * from tb_youtube  where  youtube !='' "; 
$result9=mysql_db_query($dbname,$sql9);                                 
  $amount='1';
                                  
  while($record9=mysql_fetch_array($result9)) {
	$youtube1=$record9[youtube];
	$id=$record9[id];
  
		echo "
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <th align='left' scope='col'><center><iframe width='420' height='315' src='$youtube1' frameborder='0' allowfullscreen></iframe> </center>&nbsp;</th>
    <th align='left' scope='col'><a href='update_youtube.php?id=$id' onclick=\"return confirm(' แน่ใจว่าต้องการลบyoutubeนี้?')\"><img src='images/delete.jpg' border='0' /></a></th>
  </tr>
</table>   ";
	  $amount++;
			  }//end while	youtube4
			  

			  		  			  			  
			  
?></th>
                          </tr>
                          <tr>
                            <th scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col">&nbsp;</th>
                          </tr>
                          <tr align="left" class="body1-2">
                            <th scope="col">&nbsp;</th>
                            <th valign="top" scope="col">เพิ่ม youtube 
                              <form id="form1" name="form1" method="post" action="youtube_admin.php">
                                <p>
                                  <input name="add_youtube" type="text" value="http://www.youtube.com/embed/" size="70" />
                                  <input type="submit" name="Submit" value="เพิ่ม youtube" />
                                </p>
                                <p>* สามารถเพิ่มได้สูงสุด 4 youtube เท่านั้น </p>
                              </form>                              </th>
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
