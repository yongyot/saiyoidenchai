<? 
include "chktype.php";
?>
<?
	include "connect.php";
	$title_news=$_POST[title_news];
	$description_news=$_POST[description_news];
	
if ($title_news!="" and $description_news!="") {


$sql="insert into tb_news values('','$title_news','$description_news','','',
'','','','auction')";
$result=mysql_db_query($dbname,$sql);

mysql_close();


}	//end if
	

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การติดต่อ อบต. - ผู้ดูแลระบบ</title>
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
                          <th scope="col"><img src="images/contact_admin.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="30" scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col"><?

include "connect.php";

$sql9="select * from tb_mail  order by id_mail desc  "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
  $id_mail=$record9[id_mail];
 	$topic=$record9[topic];
	$detail=$record9[detail];
  
		echo " 
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <th align='left' scope='col' width='80%'><img src='images/li2.png' width='17' height='17' /> <a href='view_mail.php?id=$id_mail'>$topic</a> &nbsp;</th>
    <th align='left' scope='col'><a href='update_mail.php?id=$id_mail' onclick=\"return confirm(' แข่ใจว่าต้องการลบการติดต่อนี้?')\"><img src='images/delete.jpg' border='0' /></a></th>
  </tr>
</table>
		<br />        ";
	  
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
                            <th scope="col">&nbsp;</th>
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
