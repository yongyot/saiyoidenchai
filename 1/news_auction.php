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
                          <th scope="col"><img src="images/news_auction.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="30" scope="col">&nbsp;</th>
                            <th align="left" valign="top" scope="col"><?

include "connect.php";
$id=$_GET[id];

$sql9="select * from tb_news  where  id_news='$id' "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
	$title_news=$record9[title_news];
	$description_news=$record9[description_news];
	$img_news=$record9[img_news];
	$img_news2=$record9[img_news2];
	$img_news3=$record9[img_news3];
	
  
		echo " <h2><p class='body-color'>$title_news</p></h2>
				 
				<p class='body1-2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$description_news</p>";
				
			if($img_news!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news' target='_blank'>$img_news</a></p>
				       ";}
					   if($img_news2!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news2' target='_blank'>$img_news2</a></p>
				       ";}
					   if($img_news3!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news3' target='_blank'>$img_news3</a></p>
				       ";}
					   if($img_news4!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news4' target='_blank'>$img_news4</a></p>
				       ";}
					   if($img_news5!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news5' target='_blank'>$img_news5</a></p>
				       ";}
					   if($img_news6!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news6' target='_blank'>$img_news6</a></p>
				       ";}
					   if($img_news7!=''){ echo"	<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$img_news7' target='_blank'>$img_news7</a></p>
				       ";}
	  
			  }//end while											
?></th>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th align="center" scope="col">&nbsp;</th>
                          </tr>
                          <tr>
                            <th align="right" scope="col"><a href="#" onclick="window.history.back()"><img src="images/ip_icon_02_Back.png" width="30" height="30" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
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
