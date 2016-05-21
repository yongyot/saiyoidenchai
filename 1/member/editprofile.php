<? 
include "../chktype.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>http://www.guideclip.com</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

	function doChange(){
	
		if(document.getElementById("type")){
			document.getElementById("importData").style.display = 'inline'
			document.getElementById("resultData").style.display = 'inline'
		}else{
			document.getElementById("importData").style.display = 'none'
			document.getElementById("resultData").style.display = 'none'		
		}
	}	
	function doChange1(){
	
		if(document.getElementById("Data1")){			
			document.getElementById("importData1").style.display = 'none'
			document.getElementById("importData2").style.display = 'none'
			document.getElementById("importData3").style.display = 'none'
			document.getElementById("importData4").style.display = 'none'
			document.getElementById("importData5").style.display = 'none'
			document.getElementById("importData1").style.display = 'inline'			
		}
	}
	function doChange2(){
	
		if(document.getElementById("Data2")){			
			document.getElementById("importData1").style.display = 'none'
			document.getElementById("importData2").style.display = 'none'
			document.getElementById("importData3").style.display = 'none'
			document.getElementById("importData4").style.display = 'none'
			document.getElementById("importData5").style.display = 'none'	
			document.getElementById("importData2").style.display = 'inline' 
		}
	}
	function doChange3(){
	
		if(document.getElementById("Data3")){			
			document.getElementById("importData1").style.display = 'none'
			document.getElementById("importData2").style.display = 'none'
			document.getElementById("importData3").style.display = 'none'		
			document.getElementById("importData4").style.display = 'none'
			document.getElementById("importData5").style.display = 'none'
			document.getElementById("importData3").style.display = 'inline'
		}
	}
	function doChange4(){
	
		if(document.getElementById("Data3")){			
			document.getElementById("importData1").style.display = 'none'
			document.getElementById("importData2").style.display = 'none'
			document.getElementById("importData3").style.display = 'none'		
			document.getElementById("importData4").style.display = 'none'
			document.getElementById("importData5").style.display = 'none'
			document.getElementById("importData4").style.display = 'inline'
		}
	}
	function doChange5(){
	
		if(document.getElementById("Data3")){			
			document.getElementById("importData1").style.display = 'none'
			document.getElementById("importData2").style.display = 'none'
			document.getElementById("importData3").style.display = 'none'		
			document.getElementById("importData4").style.display = 'none'
			document.getElementById("importData5").style.display = 'none'
			document.getElementById("importData5").style.display = 'inline'
		}
	}
</script>
<style type="text/css">
<!--
.style2 {
	font-size: 14px;
	font-family: Tahoma;
}
.style3 {
	color: #66ccff;
	font-size: 16px;
	font-family: Tahoma;
	font-weight: bold;
}
.style4 {
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>

<body>
<table width="1037" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1011"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><? include "../header2.php"; ?></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="76">&nbsp;</td>
              <td width="126" valign="top" bgcolor="#E0E0E0" class="body"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><? include "../videomenu2.php"; ?></td>
                </tr>
              </table></td>
              <td valign="top">&nbsp;</td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td valign="top" background="../images/bg_register.png"><form id="form2" name="form2" method="post" action="editprofile2.php">
<?
$sql9="select * from tb_member where username='$sess_username' "; 
$result9=mysql_db_query($dbname,$sql9);

$record9=mysql_fetch_array($result9);
	
	$email=$record9[email];
	
	?>
	<br />
<table width="100%" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td colspan="3" align="center"><span class="style3">แก้ไขข้อมูลส่วนตัว</span><br />
                            <span class="style2">กรุณากรอกข้อความด้านล่าง</span></td>
                      </tr>
                      <tr>
                        <td width="45%" align="right">&nbsp;</td>
                        <td width="2%">&nbsp;</td>
                        <td width="53%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" class="body">Username</td>
                        <td>:</td>
                        <td class="body"><?=$sess_username?>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" class="body">E-mail Address </td>
                        <td>:</td>
                        <td><input name="email_reg" type="text" id="email_reg" value="<?=$email?>" /></td>
                      </tr>
                      <tr>
                        <td align="right" class="body">Password</td>
                        <td>:</td>
                        <td><input name="pass_reg" type="password" id="pass_reg" /></td>
                      </tr>
                      <tr>
                        <td align="right" class="body">Confirm Password </td>
                        <td>:</td>
                        <td><input type="password" name="textfield4" /></td>
                      </tr>
                      <tr>
                        <td align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="body style4">XXbCA</td>
                      </tr>
                      <tr>
                        <td align="right" class="body">Verification</td>
                        <td>:</td>
                        <td><input type="text" name="textfield5" /></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><input type="image" name="imageField3" src="../images/submit.png" /></td>
                      </tr>
                    </table>
                                    </form>                  </td>
                </tr>
              </table></td>
              <td width="74">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><? include "../footer2.php"; ?></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
