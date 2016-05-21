<? 
include "chktype.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข่าวกิจกรรม</title>
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
	color: #0099FF;
}
a:visited {
	text-decoration: none;
	color: #0099FF;
}
a:hover {
	text-decoration: underline;
	color: #0099FF;
}
a:active {
	text-decoration: none;
	color: #0099FF;
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
	$img_news4=$record9[img_news4];
	$img_news5=$record9[img_news5];
	$img_news6=$record9[img_news6];
	$img_news7=$record9[img_news7];
  
		echo " <h2><p class='body-color'>$title_news</p></h2>
				 <center>
				 ";
				 if($img_news!=''){ echo"	<a href='images/photo/$img_news' target='_blank'><img src='images/photo/$img_news' width='640' height='480' border='1' bordercolor='#0066CC'/></a></center>
	<table width='100%' border='0' cellspacing='3' cellpadding='0' align='right'>
  <tr>
    <th scope='col' >
					       ";}
	if($img_news2!=''){ echo"	<a href='images/photo/$img_news2' target='_blank'><img src='images/photo/$img_news2' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
    if($img_news3!=''){ echo"	<a href='images/photo/$img_news3' target='_blank'><img src='images/photo/$img_news3' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
	if($img_news4!=''){ echo"	<a href='images/photo/$img_news4' target='_blank'><img src='images/photo/$img_news4' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
	if($img_news5!=''){ echo"	<a href='images/photo/$img_news5' target='_blank'><img src='images/photo/$img_news5' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
	if($img_news6!=''){ echo"	<a href='images/photo/$img_news6' target='_blank'><img src='images/photo/$img_news6' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
	if($img_news7!=''){ echo"	<a href='images/photo/$img_news7' target='_blank'><img src='images/photo/$img_news7' width='315' height='235' border='1' bordercolor='#0066CC'/></a>
					       ";}
						   echo " &nbsp;</th>
  </tr>
</table><br />
				<p class='body1-2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$description_news</p>
				       ";
	  
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
