<?
include "chksession.php";
?>
<HTML>
<HEAD><TITLE>Member �к���Ҫԡ</TITLE></HEAD>
<BODY>
<h1>:: Change Password ::</h1>
<FORM METHOD=POST ACTION="changepw2.php">
  <TABLE cellspacing="2">
    <TR> 
      <TD><B>Username : </B></TD> <TD><?=$sess_username?></TD>
    </TR>
    <TR> 
      <TD><B>���ʼ�ҹ��� : </B></TD><TD><INPUT name="oldpass" type="password"> * </TD>
    </TR>
    <TR> 
      <TD><B> ���ʼ�ҹ����: </B></TD><TD><INPUT name="newpass" type="password"> * </TD>
    </TR>
    <TR> 
      <TD><B>�׹�ѹ���ʼ�ҹ���� :</B></TD><TD><INPUT name="newpass2" type="password"> * </TD>
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