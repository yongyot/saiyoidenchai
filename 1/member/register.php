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
.style4 {
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
	color: #333333;
}
.style5 {
	color: #66ccff;
	font-size: 16px;
}
.style8 {color: #333333}
.style11 {font-size: 13px}
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
              <td width="114" valign="top" bgcolor="#E0E0E0" class="body"><? include "../videomenu2.php"; ?></td>
              <td valign="top">&nbsp;</td>
              <td valign="top"><form id="form2" name="form2" method="post" action="register2.php"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td valign="top" background="../images/bg_register.png">
<br />
<table width="100%" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td colspan="3" align="center"><span class="body style5">��Ѥ���Ҫԡ����</span><br />
                            <span class="body style8 style11">��سҡ�͡��ͤ�����ҹ��ҧ</span></td>
                      </tr>
                      <tr>
                        <td width="45%" align="right">&nbsp;</td>
                        <td width="2%">&nbsp;</td>
                        <td width="53%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" class="body style8">Username</td>
                        <td>:</td>
                        <td><input name="user_reg" type="text" id="user_reg" /></td>
                      </tr>
                      <tr>
                        <td align="right" class="body style8">E-mail Address </td>
                        <td>:</td>
                        <td><input name="email_reg" type="text" id="email_reg" /></td>
                      </tr>
                      <tr>
                        <td align="right" class="body style8">Password</td>
                        <td>:</td>
                        <td><input name="pass_reg" type="password" id="pass_reg" /></td>
                      </tr>
                      <tr>
                        <td align="right" class="body style8">Confirm Password </td>
                        <td>:</td>
                        <td><input name="pass_reg2" type="password" id="pass_reg2" /></td>
                      </tr>
                      <tr>
                        <td align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="body style4">XXbCA</td>
                      </tr>
                      <tr>
                        <td align="right" class="body style8">Verification</td>
                        <td>:</td>
                        <td><input name="valid" type="text" id="valid" /></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center">&nbsp;</td>
                      </tr>
                    </table>
                        </td>
                </tr>
                <tr>
                  <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="20" class="body">&nbsp;</td>
                      <td class="body"><p><strong><u>��º�¢ͧ��� </u></strong><strong><u>Guideclip.com</u></strong><br />
                        ���ͧ���·ҧ���䫵�  &quot;Guideclip.com&quot; ����չ�º��ʹѺʹع����������������Թ������Ӻ�ԡ�âͧ Guideclip.com ���㹷ҧ����Դ ���ͼԴ������ ���͢Ѵ�����Ÿ�����Ш��յ���ླ� �����������Դ����ԡ�� ����������ʹ���ͧ�Ѻ�.�.�.��Ҵ��¡�á�зӤ����Դ����ǡѺ����������  �.�. ���� ����ռźѧ�Ѻ�������ѹ������ǹ��  �ѧ��鹷ҧ��Ҩ֧�ͷӡ����� ����Т�ͺѧ�Ѻ�ͧ���䫵�  ��������ѧ��� <br />
                        ����Т�ͺѧ�Ѻ�ͧ���䫴�  Guideclip.com</p>
                        <ol>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � ���Ҵ�ԧ�֧ʶҺѹ�����ҡ�ѵ��������Ҫǧ��  �㹷ҧ�������������ѹ�Ҵ </li>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � �������㹷ҧ���� ͹Ҩ�� </li>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � ����ҨС������Դ����������������繤����Դ��ͤ�����蹤��ͧ����� </li>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � ����Ҩ�С������Դ������蹵��˹��ͧ��ЪҪ� </li>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � ����繤����Դ����ǡѺ��á�͡�����µ�������š������ҭ� </li>
                          <li>���� Upload File, �ٻ�Ҿ���� Media ��ҧ  � ����繡�õѴ����Ҿ�ؤ�� ����Ҩ������Դ����������������ؤ�Ź�� </li>
                          <li>���� Upload File,  Media ���͢����ŵ�ҧ  � ���Դ�����·ء���ѭ�ѵ� ������ ����Ҫ�ѭ�ѵ���Ҵ��¡�á�зӼԴ����ǡѺ����������  �.�. ���� </li>
                          <li>���� Upload File, �ŧ, MV, Clip,  Video, Media, �ٻ�Ҿ ���  Software �ء��Դ�������Դ�Ԣ�Է��� ����֧ ����ͧ���¡�ä�� �ء��Դ </li>
                          <li>Guideclip.com���ʹѺʹع����������������Թ������Ӻ�ԡ�âͧ Guideclip.com����㹡�ýҡ�����ŵ����� 1 �֧ 8 ��ҧ�� </li>
                          <li>Guideclip.com�������ǹ�������� ����ǡѺ�����Т����ŷ�������ԡ�� Upload �����  Guideclip.com����§�������ԡ�ýҡ������͢������Ҹ�ó���ҹ�� </li>
                          <li>Guideclip.com��ʧǹ�Է���㹡��ź File ��������ԡ�� Upload �������Դ���͹䢴ѧ����Ǣ�ҧ�鹷ء�ó� </li>
                        </ol>
                        <p><strong><u>���͹䢡������ԡ��</u></strong> <br />
                          www.guideclip.com (㹢�͵�ŧ�������¡��� &quot;GuideClip&quot;)  ����Ңͧ ��м����ŨѴ������䫵���  ��������䫵��� ��ͧ��仵����͵�ŧ ������͹䢡�����ԡ�õ��仹��  ��觷�ҹ�����ҹ���ҧ�����´ ��÷���ҹ�����䫵���  �������仴٢������˹���� �ͧ���䫵��� ������ ��ҹ����Ѻ��ͼ١�ѹ�ҧ�����·���к����㹢�͵�ŧ ������͹䢡�����ԡ�ù��</p>
                        <p><strong>- ����ͧ���¡�ä��</strong><strong> </strong><strong>����Ԣ�Է���</strong>� <br />
                          Guideclip ����Ңͧ�Ԣ�Է��������  㹷ء� ˹�Ңͧ���䫵��� �������к���������ҧ���  �����͡���¹Ẻ ����� ����������� �����ǹ��Сͺ��� ���Ը�����  �����ѵ�ػ��ʧ��ҧ��ä�� �������Ѻ͹حҵ�ҡ Guideclip<br />
  <br />
                          Guideclip ����Ңͧ����ͧ���·ҧ��ä��  �ѭ�ѡɳ� ����ͧ���º�ԡ��  ��Ъ��ͷҧ��ä�ҷ���ҡ���������䫵��� Guideclip ���͹حҵ �����Թ�������ա��������ͧ���·ҧ��ä��  �ѭ�ѡɳ� ����ͧ���º�ԡ�� ��Ъ��ͷҧ��ä�� ��������Ѻ����Թ���  ������ѡɳ��ѡ����ǧ˹�� �ҡ Guideclip<br />
  <br />
  <strong>- ����������</strong><strong> </strong><strong>�����ǹ��Сͺ��ҧ�</strong> <br />
                          ������  �����ǹ��Сͺ��ҧ� ����ҡ���������䫵��� �Ҩ�ա������¹�ŧ�� ������ͧ������ҹ��Һ��ǧ˹�� <br />
  <br />
  <br />
  <strong>- ����ա���Ѻ��Сѹ</strong> <br />
                          Guideclip ���������ö�Ѻ��Сѹ��Ң����� �դ����١��ͧ ����ó���§�� ��������Ѻ�ѵ�ػ��ʧ�����੾��  ��л��Ȩҡ����� ��駹�� Guideclip ������Ѻ�Դ ����Ѻ�����Դ��Ҵ  ���͡��������� 㹢����� �����ǹ��Сͺ��� <br />
  <br />
  <br />
  <strong>- ��ͨӡѴ�����Ѻ�Դ</strong> <br />
                          Guideclip ������Ѻ�Դ��ͤ������������ ����֧  ����������� �٭���� ��Ф������·���Դ���  �������µç���������� ��੾����Ш� �ºѧ��ԭ �����繼��׺���ͧ  ����Դ�ҡ��÷���ҹ��������䫵��� �������䫵���������§�Ѻ���䫵���  ���͡�÷��ؤ���� �������ö������� �͡�ҡ��� Guideclip ������Ѻ�Դ��ͤ����������  �٭���� ���ͤ������·���Դ�ҡ�����������㹡����ҹ  �����Դ��Ҵ �������� �����ش�Чѡ ��ͺ����ͧ �����������ó�  ��������������� �֧������ Guideclip ���͵��᷹�ͧ Guideclip �����Ѻ������Ҩ���Դ�����������  �٭���� ���ͤ������´ѧ����Ǣ��<br />
  <br />
                          �մ��ͷ��١�ʴ���˹�����  �Դ��鹨ҡ��� ����� ���Ҹ�ó�� ���  �������Ẻ�ѵ��ѵ�<br />
                          ���������䫵���觹�� �����繵�ͧ��繴���  �������Ѻ�Դ�ͺ��͢�ͤ����� �����֧��ͧ���Ԩ�ó�ҳ<br />
                          㹡�á��蹡�ͧ���µ���ͧ ��ж��  ��ҹ����繢�ͤ��� ���� ��Ի�մ��� �� ���  �Ѵ��͡����������Ÿ���<br />
                          ��س���ź�ҷ�� <a href="mailto:webmaster@guideclip.com">webmaster@Guideclip.com</a> ���ͨ��� ���Թ���ź�ѹ�� <br />
                          Guideclip ����Ѻ�ͧ��������ó�ͧ������ �մ��� ������� ������ ���������§���䫵�  �ٻ�Ҿ ��Т�������������䫵� �������Ѻ�Դ�ͺ㹤����Դ��Ҵ����Ҩ�Դ���  �ҡ��ù�Ң����Ŵѧ�������� 㹷ء�ó� ������բ��¡���</p>
                        <p><strong>- ���������§�Ѻ���䫵�����</strong> <br />
                          ���䫵���  �Ҩ�ա��������§�Ѻ���䪵����� ������������������ԡ��  ��д��ŨѴ����ºؤ�ŷ����� Guideclip ����������Ѻ�ͧ  �����׹�ѹ�����١��ͧ������Ңͧ���䫵�����ҹ�� ������������¹�����  Guideclip ������Ѻ�ͧ �����йӢ���������䫵�����ҹ��<br />
  <br />
                          ��÷���ҹ���͡��������������䫵�ѧ����� �����ҷ�ҹ����Ѻ��������§����§�������  Guideclip ���й�����ҹ��ҹ��������´��͵�ŧ ������͹䢡�����ԡ�� ��ʹ����º�¡���ѡ�Ҥ�����ʹ���  �ͧ���䫵���������§��� ��͹��������䫵�ѧ�����</p>
                        <p><strong><u>��º���Է����ǹ�ؤ��</u></strong><strong><u> </u></strong><br />
                          ��º���Է����ǹ�ؤ�Ţͧ  Guideclip �ռ���Ѻ������Ǻ�����С��������� �����䫵���к�ԡ�âͧ<br />
                          Guideclip ������������´�ѧ���仹��<br />
  <br />
  <strong>1. </strong><strong>��������ǹ�ؤ��</strong><br />
                          Guideclip.com ���红�������ǹ��Ǣͧ��ҹ  ���͡�ù��ʹ���������к�ԡ�� ���ç�Ѻ������ͧ������<br />
                          ����ʹ㨢ͧ�س ����ѡ <br />
                          �к����ա�úѹ�֡ IP Address �ͧ��ҹ㹡�ýҡ��ͤ���  ��С�� upload �մ��� �ء���� �������ö��������ҧ�ԧ�����ѧ�� <br />
  <br />
  <br />
  <strong>2. </strong><strong>�����ء���  (</strong><strong>Cookies)</strong><br />
                          �ء����͢����Ţ�Ҵ��� ���������  Browser 㹢ͧ������������س����������<br />
                          �����红����Ţ�з���ҹ���ԡ�âͧ���䫵���� �ء����������红�������ѧ�ҡ����յԴ��͡Ѻ�к�  (log in)<br />
                          ��Ш���ش��èѴ�� ������͡�ҡ�к�  (log out) �ء�����������ҷ�Һ�֧�ĵԡ��� �ͧ��������<br />
                          �����ҹ�¤����дǡ 㹡�è�ṡ�����ҹ�ͧ�����Ҫ� </p>
                        <p><strong>3. </strong><strong>������������Ҫԡ</strong><strong> </strong><br />
                          Guideclip.com �Դ����ԡ�ÿ�� ������դ�������  ���е�ͧ�������ҡ����ɳҺ�ҧ ������Ţͧ��Ҫԡ<br />
                          ������ա���Դ����ѧ������ؤ�ŷ��  3 ���С���<br />
                          ���ŧ�ɳ�������Է���㹡����Ҷ֧�����Ţͧ��Ҫԡ���ҧ��͹ ���ٻẺ��ù��ʹ��ɳ�<br />
                          �Ҩ��������ٻẺ�ͧẹ����  ��Ш���������硷�͹ԡ�� ��觷ҧ��ҨШѴ�觶֧��Ҫԡ �ء �  ��͹ <br />
                          �·�ҹ��Ҫԡ ���Է������¡��ԡ����Ѻ�ɳҵ�ҧ  ���ء����� ������բ��¡���<br />
  <br />
  <strong>4. </strong><strong>����Դ�¢����ŵ���Ҹ�ó�</strong><strong> </strong><br />
                          Guideclip.com ������Դ�¢�������ǹ�ؤ�Ţͧ��Ҫԡ ¡���㹡óյ��仹��<br />
                          4.1 Guideclip.com ���Դ�¢�������ǹ�ؤ�Ţͧ��ҹ��Ҫԡ ��;ѹ��Ե÷ҧ��áԨ<br />
                          ��м�������ʹѺʹع �ҧ��áԨ  ������ Guideclip.com ��������<br />
  <br />
                          4.2 Guideclip.com ���Է���㹡���Դ�¢������  � �ҡ�����Ź�� �繷���ͧ���㹷ҧ������<br />
                          �¡���Դ�¹���դ������繵�� <br />
                          - ��кǹ��÷ҧ������<br />
                          - ��÷ӵ�����͹䢡������ԡ��<br />
                          - �����ҧ �������¡��ͧ��������ҹ��  � ����Դ�Է�Ԣͧ������<br />
                          - ����ѡ���Է��� ��Ф�����ʹ�����ǹ�ؤ�Ţͧ������ԡ�âͧ���䫵�  Guideclip.com <br />
                          㹡óշ����Ҫԡ����Դ ��ҽ׹  �����軮ԺѵԵ�����͹䢡������ԡ��<br />
  <br />
                          4.3 �����š��ŧ����¹�ͧ�س�ж١��㹡�ô��Թ�ҹ���䫵��� ���������Ѥ���������Ѻ<br />
                          �����µ�͹�Ѻ�ҡ Guideclip.com ��觨�͸Ժ�¤س�ѡɳе�ҧ � �ͧ��ԡ��<br />
                          �Ҩ�觨��������Ѻ��Ҫԡ�繻�ШӴ��� ����繨����·��س�������ö¡��ԡ����Ѻ��͡�ҡ�лԴ�ѭ��<br />
                          �����¹����駢��ǡ������¹�ŧ��ԡ�÷���Ӥѭ �س�ѡɳ�����  ��û�Ѻ��ا��ҹ෤�Ԥ<br />
                          ��Т���������ǡѺ��Ե�ѳ����к�ԡ����� �<br />
  <br />
                          4.4 ��Ի�մ��ͷ��١�ʺ�˹�����  �Դ��鹨ҡ��� ����� ���Ҹ�ó�� ��� �������Ẻ�ѵ��ѵ�<br />
                          ���������䫵���觹��  �����繵�ͧ��繴��� �������Ѻ�Դ�ͺ��͢�ͤ����� �����֧��ͧ���Ԩ�ó�ҳ<br />
                          㹡�á��蹡�ͧ���µ���ͧ ��ж��  ��ҹ����繢�ͤ��� ���� ��Ի�մ��� �� ���  �Ѵ��͡����������Ÿ���<br />
                          ��س����ҷ�� <a href="mailto:webmaster@guideclip.com">webmaster@Guideclip.com</a> ���ͷ���ҹ���� ���Թ ��÷ѹ�� �͢ͺ��Фس </p></td>
                    </tr>
                  </table>
                    <table width="100%" border="0" cellspacing="5" cellpadding="0">

                      <tr>
                        <td align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="100%" align="center" class="body"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="30%">&nbsp;</td>
                            <td width="70%" align="left"><input type="checkbox" name="checkbox" value="checkbox" />
                              <strong>����Ѻ���͹�</strong> &nbsp;
                              <input type="image" name="imageField32" src="../images/submit.png" /></td>
                          </tr>
                        </table>
                          </td>
                      </tr>
                    </table></td>
                </tr>
              </table> </form></td>
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
