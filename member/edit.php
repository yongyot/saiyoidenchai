<?
include "chksession.php";
include "function.php";

include "connect.php";
$sql="select * from tb_member where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
$record=mysql_fetch_array($result);

$username=$record[username];
$name=$record[name];
$sex=$record[sex];
$email=$record[email];
$telephone=$record[telephone];
$address=$record[address];
$reg_date=$record[reg_date];

mysql_close();
?>
<HTML>
<HEAD><TITLE>Member �к���Ҫԡ</TITLE></HEAD>
<BODY>
<h1>:: Edit Member ::</h1>
<FORM METHOD="POST" ACTION="edit2.php">
  <TABLE CELLSPACING="2">
    <TR> 
      <TD><B>Username : </B></TD><TD><?=$username?></TD>
    </TR>
    <TR> 
      <TD><B>���� - ʡ�� : </B></TD><TD><?=$name?></TD>
    </TR>
    <TR> 
      <TD><B>�� : </B></TD><TD><?=$sex?></TD>
    </TR>
    <TR> 
      <TD><B>����� : </B></TD>
      <TD><INPUT NAME="email_edit" TYPE="text" VALUE="<?=$email?>" SIZE="26"> * </TD>
    </TR>
    <TR> 
      <TD><B>���Ѿ�� : </B></TD>
      <TD><INPUT NAME="tel_edit" TYPE="text" VALUE="<?=$telephone?>" SIZE="26"></TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><B>�������Դ��� :</B></TD>
      <TD><TEXTAREA NAME="address_edit" COLS="35" ROWS="3"><?=$address?></TEXTAREA></TD>
    </TR>
    <TR>
      <TD><B>��Ѥ������ :</B></TD>
      <TD><?=displaydate($reg_date)?></TD>
    </TR>
    <TR> 
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="Submit" VALUE="Submit"> <INPUT TYPE="Reset" VALUE="Reset"></TD>
    </TR>
  </TABLE>
</FORM>
[ <a href="main.php">��Ѻ˹����ѡ</a> ] 
</BODY>
</HTML>