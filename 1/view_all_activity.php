<? 
include "chktype.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข่าวจัดซื้อจัดจ้าง</title>
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
                          <th scope="col"><img src="images/news_activity.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="20" scope="col">&nbsp;</th>
                            <th align="left" valign="top" class="body1" scope="col"><br />
                              <br />
                              <?

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
                                              <th width='0' scope='col'>&nbsp;</th>
                                              <th width='135' align='center' scope='col'><a href='news_activity.php?id=$id_news'><img src='images/photo/$img_news' width='125' height='90' border='0'/></a></th>
                                              <th width='5' scope='col'>&nbsp;</th>
                                              <th align='left' valign='top' scope='col'>
                                                  <div align='left' class='body1'> <a href='news_activity.php?id=$id_news'>$description2_news</a> </div></th>
                                              <th align='left' valign='top' scope='col'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            </tr>
                                            <tr>
                                              <td width='30'>&nbsp;</td>
                                              <td width='135' align='center'>&nbsp;</td>
                                              <td width='5'>&nbsp;</td>
                                              <td align='left' valign='top'><div align='left'></div></td>
                                              <td align='left' valign='top'>&nbsp;</td>
                                            </tr>
                                        </table>
										        ";
	  
			  }//end while											
?></th>
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
