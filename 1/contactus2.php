<? 
include "chktype.php";
?>
<?
	include "connect.php";
	$name=$_POST[name];
	$email=$_POST[email];
	$text=$_POST[text];
	$topic=$_POST[topic];
	

if ($name!="" and $email!="" and $text!="" and $topic!="") {


$sql="insert into tb_mail values('','$topic','คุณ.$name - $email - $text','','')";
$result=mysql_db_query($dbname,$sql);

mysql_close();


}	//end if?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ร้องเรียนร้องทุกข์</title>
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
                          <th scope="col"><img src="images/contactus2.gif" width="680" height="45" /></th>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="35" scope="col">&nbsp;</th>
                            <th valign="top" scope="col"><table width="100%" cellpadding="0" cellspacing="0">
                              <tr class="body1">
                                <td colspan="2" class="body2-head"><div align="left">&#3629;&#3591;&#3588;&#3660;&#3585;&#3634;&#3619;&#3610;&#3619;&#3636;&#3627;&#3634;&#3619;&#3626;&#3656;&#3623;&#3609;&#3605;&#3635;&#3610;&#3621;&#3652;&#3607;&#3619;&#3618;&#3657;&#3629;&#3618; <br />
                                  <br />
                                </div></td>
                              </tr>
                              <tr>
                                <td class="body1"><table border="0" width="100%">
                                    <tbody>
                                      <tr>
                                        <td><table border="0" cellspacing="5" cellpadding="0" width="100%">
                                          <tbody>
                                            <tr valign="top">
                                              <td width="40" rowspan="6"><div align="left"><img src="images/con_address.png" alt="ที่อยู่: " width="16" height="16" /> </div></td>
                                              </tr>
                                            <tr>
                                              <td valign="top"><div align="left">&#3648;&#3621;&#3586;&#3607;&#3637;&#3656; 207  &#3627;&#3617;&#3641;&#3656; 2</div></td>
                                              </tr>
                                            <tr>
                                              <td valign="top"><div align="left">&#3605;&#3635;&#3610;&#3621;&#3652;&#3607;&#3619;&#3618;&#3657;&#3629;&#3618; &#3629;&#3635;&#3648;&#3616;&#3629;&#3648;&#3604;&#3656;&#3609;&#3594;&#3633;&#3618; </div></td>
                                              </tr>
                                            <tr>
                                              <td valign="top"><div align="left">&#3592;&#3633;&#3591;&#3627;&#3623;&#3633;&#3604;&#3649;&#3614;&#3619;&#3656; </div></td>
                                              </tr>
                                            <tr>
                                              <td valign="top"><div align="left">&#3619;&#3627;&#3633;&#3626;&#3652;&#3611;&#3619;&#3625;&#3603;&#3637;&#3618;&#3660; 54110 </div></td>
                                              </tr>
                                            
                                            <tr>                                              </tr>
                                            <tr>
                                              <td valign="top"><div align="left"><img src="images/emailButton.png" alt="อีเมล: " width="16" height="16" /> </div></td>
                                                    <td><div align="left"> <a href="mailto:saiyoi@live.com">saiyoi@live.com</a></div></td>
                                                  </tr>
                                            <tr>
                                              <td width="40" valign="top"><div align="left"><img src="images/con_tel.png" alt="โทรศัพท์: " width="16" height="16" /> </div></td>
                                                    <td><div align="left">054661066 ต่อ<br />
                                                      101  นายกอบต.<br />
                                                      102  ส่วนการศึกษา<br />
                                                      103  ส่วนการคลัง<br />
                                                      104  ศูนย์ ICT ชุมชนตำบลไทรย้อย<br />
                                                      105  สำนักงานปลัด อบต.<br />
                                                      106  ปลัด อบต.<br />
                                                      107  ส่วนโยธา<br />
                                                    โทรสาร.054-661-066 ต่อ 108 </div></td>
                                                  </tr>
                                            <tr>
                                              <td width="40" valign="top"><div align="left"><img src="images/con_fax.png" alt="แฟกซ์: " width="16" height="16" /> </div></td>
                                                    <td><div align="left">Fax </div></td>
                                                  </tr>
                                            <tr>
                                              <td width="40" valign="top"><div align="left"><img src="images/con_mobile.png" alt="เบอร์มือถือ: " width="16" height="16" /> </div></td>
                                                    <td><div align="left">- </div></td>
                                                  </tr>
                                            <tr>
                                              <td width="40" valign="top"><div align="left"></div></td>
                                                    <td><div align="left"><a href="http://www.saiyoidenchai.com" target="_blank">http://www.saiyoidenchai.org</a></div></td>
                                                  </tr>
                                            </tbody>
                                        </table>                                          <br /></td>
                                        <td valign="top" align="right"><div><img src="images/web_links.jpg" alt="&#3605;&#3636;&#3604;&#3605;&#3656;&#3629;" width="150" height="110" align="middle" /> </div></td>
                                      </tr>
                                    </tbody>
                                </table></td>
                                <td width="10">&nbsp;</td>
                              </tr>
                              <tr class="body1">
                                <td>&nbsp;</td>
                              </tr>
                              <tr class="body1">
                                <td colspan="2">
								<form id="emailForm" method="post" name="emailForm" action="contactus2.php"> <table width="100%" border="0">
                                  <tr>
                                    <td><div align="left">&#3585;&#3619;&#3640;&#3603;&#3634;&#3651;&#3626;&#3656;&#3594;&#3639;&#3656;&#3629;&#3586;&#3629;&#3591;&#3607;&#3656;&#3634;&#3609;: </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                      <input id="contact_name" size="30" type="text" name="name" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">&#3629;&#3637;&#3648;&#3617;&#3621;: </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                      <input id="contact_email" maxlength="100" size="30" type="text" name="email" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">หัวข้อติดต่อ: </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                      <input id="email" maxlength="100" size="45" type="text" name="topic" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">&#3586;&#3657;&#3629;&#3588;&#3623;&#3634;&#3617;&#3586;&#3629;&#3591;&#3607;&#3656;&#3634;&#3609;: </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                      <textarea id="contact_text" rows="10" cols="50" name="text"></textarea>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                      <input type="submit" name="Submit" value="ส่งเรื่อง" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                </table>
								</form>                                  </td>
                              </tr>
                            </table>                            </th>
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
