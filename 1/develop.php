<? 
include "chktype.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยุทธศาสตร์การพัฒนาท้องถิ่น</title>
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
                          <th scope="col"><img src="images/develop_menu.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="35" scope="col">&nbsp;</th>
                            <th valign="top" class="body1" scope="col"><p align="left">&#3627;&#3634;&#3585;&#3618;&#3633;&#3591;&#3652;&#3617;&#3656;&#3617;&#3637;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3648;&#3611;&#3636;&#3604;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619; .pdf <a href="http://www.saiyoidenchai.com/images/stories/pdf-ico.png" onclick="return hs.expand(this, { captionText: 'pdf-ico', slideshowGroup: '61' })"><img src="images/32x31-images-stories-pdf-ico.png" alt="pdf-ico" width="32" height="31" border="0" /></a> <a target="_blank" href="http://get.adobe.com/reader/">&#3604;&#3634;&#3623;&#3609;&#3660;&#3650;&#3627;&#3621;&#3604;&#3607;&#3637;&#3656;&#3609;&#3637;&#3656;</a></p>
                              </th>
                          </tr>
                          <tr>
                            <th width="35" scope="col">&nbsp;</th>
                            <th valign="top" class="body1" scope="col"><div align="left">
                              <?

include "connect.php";

$sql9="select * from tb_dev  where id='1' and dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
  
		echo "<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$dev' target='_blank'>$dev</a></p><br />         ";
	  
			  }//end while	youtube1
$sql9="select * from tb_dev  where id='2' and dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
  
		echo "<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$dev' target='_blank'>$dev</a></p><br />         ";
	  
			  }//end while	youtube1
$sql9="select * from tb_dev  where id='3' and dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
  
		echo "<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$dev' target='_blank'>$dev</a></p><br />         ";
	  
			  }//end while	youtube2
$sql9="select * from tb_dev  where id='4' and dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);

                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
  
		echo "<p class='body1-2'><img src='images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='images/file/$dev' target='_blank'>$dev</a>";
	  
			  }//end while	youtube3		  			  			  
			  
?>
                            </div>                              </th>
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
