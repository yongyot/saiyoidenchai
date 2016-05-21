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
                        <td colspan="3" align="center"><span class="body style5">สมัครสมาชิกใหม่</span><br />
                            <span class="body style8 style11">กรุณากรอกข้อความด้านล่าง</span></td>
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
                      <td class="body"><p><strong><u>นโยบายของเว็บ </u></strong><strong><u>Guideclip.com</u></strong><br />
                        เนื่องด้วยทางเว็บไซต์  &quot;Guideclip.com&quot; ไม่มีนโยบายสนับสนุนหรือส่งเสริมหรือยินยอมให้นำบริการของ Guideclip.com ไปใช้ในทางละเมิด หรือผิดกฏหมาย หรือขัดต่อศีลธรรมและจารีตประเพณี ตั้งแต่เริ่มเปิดให้บริการ แต่เพื่อให้สอดคล้องกับพ.ร.บ.ว่าด้วยการกระทำความผิดเกี่ยวกับคอมพิวเตอร์  พ.ศ. ๒๕๕๐ ที่มีผลบังคับใช้ตั้งแต่วันนี้แล้วนั้น  ดังนั้นทางเราจึงขอทำการแก้ไข กฏและข้อบังคับของเว็บไซต์  เพิ่มเติมดังนี้ <br />
                        กฏและข้อบังคับของเว็บไซด์  Guideclip.com</p>
                        <ol>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่พาดพิงถึงสถาบันพระมหากษัตริย์และราชวงศ์  ไปในทางเสื่อมเสียเป็นอันขาด </li>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่ส่อไปในทางลามก อนาจาร </li>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่น่าจะก่อให้เกิดความเสียหายหรือเป็นความผิดต่อความมั่นคงของประเทศ </li>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่อาจจะก่อให้เกิดความตื่นตระหนกของประชาชน </li>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่เป็นความผิดเกี่ยวกับการก่อการร้ายตามประมวลกฎหมายอาญา </li>
                          <li>ห้าม Upload File, รูปภาพหรือ Media ต่าง  ๆ ที่เป็นการตัดต่อภาพบุคคล ที่อาจทำให้เกิดความเสื่อมเสียแก่บุคคลนั้น </li>
                          <li>ห้าม Upload File,  Media หรือข้อมูลต่าง  ๆ ที่ผิดกฎหมายทุกบทบัญญัติ รวมทั้ง พระราชบัญญัติว่าด้วยการกระทำผิดเกี่ยวกับคอมพิวเตอร์  พ.ศ. ๒๕๕๐ </li>
                          <li>ห้าม Upload File, เพลง, MV, Clip,  Video, Media, รูปภาพ และ  Software ทุกชนิดที่ละเมิดลิขสิทธิ์ รวมถึง เครื่องหมายการค้า ทุกชนิด </li>
                          <li>Guideclip.comไม่สนับสนุนหรือส่งเสริมหรือยินยอมให้นำบริการของ Guideclip.comมาใช้ในการฝากข้อมูลตามข้อ 1 ถึง 8 ข้างต้น </li>
                          <li>Guideclip.comไม่มีส่วนรู้เห็นใดๆ เกี่ยวกับไฟล์และข้อมูลที่ผู้ใช้บริการ Upload ขึ้นมา  Guideclip.comเป็นเพียงผู้ให้บริการฝากไฟล์หรือข้อมูลสาธารณะเท่านั้น </li>
                          <li>Guideclip.comขอสงวนสิทธิ์ในการลบ File ที่ผู้ใช้บริการ Upload ขึ้นมาแต่ผิดเงื่อนไขดังกล่าวข้างต้นทุกกรณี </li>
                        </ol>
                        <p><strong><u>เงื่อนไขการให้บริการ</u></strong> <br />
                          www.guideclip.com (ในข้อตกลงนี้จะเรียกว่า &quot;GuideClip&quot;)  เป็นเจ้าของ และผู้ดูแลจัดการเว็บไซต์นี้  การใช้เว็บไซต์นี้ ต้องเป็นไปตามข้อตกลง และเงื่อนไขการใช้บริการต่อไปนี้  ซึ่งท่านควรอ่านอย่างละเอียด การที่ท่านใช้เว็บไซต์นี้  หรือเข้าไปดูข้อมูลในหน้าใดๆ ของเว็บไซต์นี้ ถือว่า ท่านยอมรับข้อผูกพันทางกฎหมายที่ระบุไว้ในข้อตกลง และเงื่อนไขการใช้บริการนี้</p>
                        <p><strong>- เครื่องหมายการค้า</strong><strong> </strong><strong>และลิขสิทธิ์</strong>  <br />
                          Guideclip เป็นเจ้าของลิขสิทธิ์ข้อมูล  ในทุกๆ หน้าของเว็บไซต์นี้ เว้นแต่จะระบุไว้เป็นอย่างอื่น  ห้ามลอกเลียนแบบ เผยแพร่ หรือใช้ข้อมูล และส่วนประกอบนั้น โดยวิธีอื่นใด  เพื่อวัตถุประสงค์ทางการค้า โดยมิได้รับอนุญาตจาก Guideclip<br />
  <br />
                          Guideclip เป็นเจ้าของเครื่องหมายทางการค้า  สัญลักษณ์ เครื่องหมายบริการ  และชื่อทางการค้าที่ปรากฏอยู่ในเว็บไซต์นี้ Guideclip ไม่อนุญาต หรือยินยอมให้มีการใช้เครื่องหมายทางการค้า  สัญลักษณ์ เครื่องหมายบริการ และชื่อทางการค้า โดยไม่ได้รับการยินยอม  เป็นลายลักษณ์อักษรล่วงหน้า จาก Guideclip<br />
  <br />
  <strong>- การใช้ข้อมูล</strong><strong> </strong><strong>และส่วนประกอบต่างๆ</strong> <br />
                          ข้อมูล  และส่วนประกอบต่างๆ ที่ปรากฏอยู่ในเว็บไซต์นี้ อาจมีการเปลี่ยนแปลงได้ โดยไม่ต้องแจ้งให้ท่านทราบล่วงหน้า <br />
  <br />
  <br />
  <strong>- ไม่มีการรับประกัน</strong> <br />
                          Guideclip ก็ไม่สามารถรับประกันว่าข้อมูล มีความถูกต้อง สมบูรณ์เพียงพอ เหมาะสมกับวัตถุประสงค์ใดโดยเฉพาะ  และปราศจากไวรัส ทั้งนี้ Guideclip จะไม่รับผิด สำหรับความผิดพลาด  หรือการละเว้นใดๆ ในข้อมูล และส่วนประกอบนั้น <br />
  <br />
  <br />
  <strong>- ข้อจำกัดความรับผิด</strong> <br />
                          Guideclip จะไม่รับผิดต่อความเสียหายใดๆ รวมถึง  ความเสียหาย สูญเสีย และค่าใช้จ่ายที่เกิดขึ้น  ไม่ว่าโดยตรงหรือโดยอ้อม โดยเฉพาะเจาะจง โดยบังเอิญ หรือเป็นผลสืบเนื่อง  ซึ่งเกิดจากการที่ท่านเข้าใช้เว็บไซต์นี้ หรือเว็บไซต์ที่เชื่อมโยงกับเว็บไซต์นี้  หรือการที่บุคคลใดๆ ไม่สามารถเข้าใช้ได้ นอกจากนั้น Guideclip จะไม่รับผิดต่อความเสียหาย  สูญเสีย หรือค่าใช้จ่ายที่เกิดจากความล้มเหลวในการใช้งาน  ความผิดพลาด การละเว้น การหยุดชะงัก ข้อบกพร่อง ความไม่สมบูรณ์  คอมพิวเตอร์ไวรัส ถึงแม้ว่า Guideclip หรือตัวแทนของ Guideclip จะได้รับแจ้งว่าอาจจะเกิดความเสียหาย  สูญเสีย หรือค่าใช้จ่ายดังกล่าวขึ้น<br />
  <br />
                          วีดีโอที่ถูกแสดงบนหน้าเว็บ  เกิดขึ้นจากการ เผยแพร่ โดยสาธารณชน และ  ได้เผยแพร่แบบอัตโนมัติ<br />
                          ผู้ดูแลเว็บไซต์แห่งนี้ ไม่จำเป็นต้องเห็นด้วย  และไม่รับผิดชอบต่อข้อความใดๆ ผู้ชมจึงต้องใช้วิจารณญาณ<br />
                          ในการกลั่นกรองด้วยตัวเอง และถ้า  ท่านพบเห็นข้อความ หรือ คลิปวีดีโอ ใดๆ ที่  ขัดต่อกฎหมายและศีลธรรม<br />
                          กรุณาแจ้งลบมาที่ <a href="mailto:webmaster@guideclip.com">webmaster@Guideclip.com</a> เพื่อจะได้ ดำเนินการลบทันที <br />
                          Guideclip ไม่รับรองความสมบูรณ์ของข้อมูล วีดีโอ ข่าวสาร บทความ การเชื่อมโยงเว็บไซต์  รูปภาพ และข้อมูลอื่นๆในเว็บไซต์ และไม่รับผิดชอบในความผิดพลาดที่อาจเกิดขึ้น  จากการนําข้อมูลดังกล่าวไปใช้ ในทุกกรณี โดยไม่มีข้อยกเว้น</p>
                        <p><strong>- การเชื่อมโยงกับเว็บไซต์อื่นๆ</strong> <br />
                          เว็บไซต์นี้  อาจมีการเชื่อมโยงกับเว็บไชต์อื่นๆ ซึ่งอยู่ภายใต้การให้บริการ  และดูแลจัดการโดยบุคคลที่สาม Guideclip มิได้ให้การรับรอง  หรือยืนยันความถูกต้องในเนื้อหาของเว็บไซต์เหล่านั้น และมิได้สื่อโดยนัยว่า  Guideclip ให้การรับรอง หรือแนะนำข้อมูลในเว็บไซต์เหล่านั้น<br />
  <br />
                          การที่ท่านเลือกเข้าเยี่ยมชมเว็บไซต์ดังกล่าว ถือว่าท่านยอมรับความเสี่ยงแต่เพียงผู้เดียว  Guideclip ขอแนะนำให้ท่านอ่านรายละเอียดข้อตกลง และเงื่อนไขการใช้บริการ ตลอดจนนโยบายการรักษาความปลอดภัย  ของเว็บไซต์ที่เชื่อมโยงนั้น ก่อนเข้าใช้เว็บไซต์ดังกล่าว</p>
                        <p><strong><u>นโยบายสิทธิส่วนบุคคล</u></strong><strong><u> </u></strong><br />
                          นโยบายสิทธิส่วนบุคคลของ  Guideclip มีผลใช้กับการเก็บรวบรวมและการใช้ข้อมูล บนเว็บไซต์และบริการของ<br />
                          Guideclip โดยมีรายละเอียดดังต่อไปนี้<br />
  <br />
  <strong>1. </strong><strong>ข้อมูลส่วนบุคคล</strong><br />
                          Guideclip.com จะเก็บข้อมูลส่วนตัวของท่าน  เพื่อการนำเสนอเนื้อหาและบริการ ให้ตรงกับความต้องการและ<br />
                          ความสนใจของคุณ เป็นหลัก <br />
                          ระบบจะมีการบันทึก IP Address ของท่านในการฝากข้อความ  และการ upload วีดีโอ ทุกครั้ง และสามารถนำมาใช้อ้างอิงภายหลังได้ <br />
  <br />
  <br />
  <strong>2. </strong><strong>การใช้คุกกี้  (</strong><strong>Cookies)</strong><br />
                          คุกกี้คือข้อมูลขนาดเล็ก ที่เก็บอยู่  Browser ในของคอมพิวเตอร์ที่คุณใช้เชื่อมต่อ<br />
                          เพื่อเก็บข้อมูลขณะที่ท่านใช้บริการของเว็บไซต์เรา คุกกี้จะเริ่มเก็บข้อมูลหลังจากที่มีติดต่อกับระบบ  (log in)<br />
                          และจะหยุดการจัดเก็บ เมื่อออกจากระบบ  (log out) คุกกี้ช่วยให้เราทราบถึงพฤติกรรม ของผู้บริโภค<br />
                          และอํานวยความสะดวก ในการจำแนกการใช้งานของผู้เข้าชม </p>
                        <p><strong>3. </strong><strong>การใช้ข้อมูลสมาชิก</strong><strong> </strong><br />
                          Guideclip.com เปิดให้บริการฟรี โดยเรามีความจำเป็น  ที่จะต้องหารายได้จากการโฆษณาบ้าง แต่ข้อมูลของสมาชิก<br />
                          จะไม่มีการเปิดเผยไปยังกลุ่มบุคคลที่  3 แต่ประการใด<br />
                          ผู้ลงโฆษณาไม่มีสิทธิ์ในการเข้าถึงข้อมูลของสมาชิกอย่างแน่นอน โดยรูปแบบการนำเสนอโฆษณา<br />
                          อาจจะอยู่ในรูปแบบของแบนเนอร์  และจดหมายอิเล็กทรอนิกส์ ซึ่งทางเราจะจัดส่งถึงสมาชิก ทุก ๆ  เดือน <br />
                          โดยท่านสมาชิก มีสิทธิ์ที่จะยกเลิกการรับโฆษณาต่าง  ๆได้ทุกเมื่อ โดยไม่มีข้อยกเว้น<br />
  <br />
  <strong>4. </strong><strong>การเปิดเผยข้อมูลต่อสาธารณะ</strong><strong> </strong><br />
                          Guideclip.com จะไม่เปิดเผยข้อมูลส่วนบุคคลของสมาชิก ยกเว้นในกรณีต่อไปนี้<br />
                          4.1 Guideclip.com จะเปิดเผยข้อมูลส่วนบุคคลของท่านสมาชิก ต่อพันธมิตรทางธุรกิจ<br />
                          และผู้ให้การสนับสนุน ทางธุรกิจ  ตามที่ Guideclip.com เห็นสมควร<br />
  <br />
                          4.2 Guideclip.com มีสิทธิ์ในการเปิดเผยข้อมูลใด  ๆ หากข้อมูลนั้น เป็นที่ต้องการในทางกฎหมาย<br />
                          โดยการเปิดเผยนั้นมีความจำเป็นต่อ <br />
                          - กระบวนการทางกฎหมาย<br />
                          - การทำตามเงื่อนไขการให้บริการ<br />
                          - การอ้าง หรือเรียกร้องว่าเนื้อหานั้น  ๆ ละเมิดสิทธิของผู้อื่น<br />
                          - การรักษาสิทธิ์ และความปลอดภัยส่วนบุคคลของผู้ใช้บริการของเว็บไซต์  Guideclip.com <br />
                          ในกรณีที่สมาชิกละเมิด ฝ่าฝืน  และไม่ปฎิบัติตามเงื่อนไขการให้บริการ<br />
  <br />
                          4.3 ข้อมูลการลงทะเบียนของคุณจะถูกใช้ในการดำเนินงานเว็บไซต์นี้ ผู้ใช้ที่สมัครใหม่จะได้รับ<br />
                          จดหมายต้อนรับจาก Guideclip.com ซึ่งจะอธิบายคุณลักษณะต่าง ๆ ของบริการ<br />
                          อาจส่งจดหมายให้กับสมาชิกเป็นประจำด้วย ซึ่งเป็นจดหมายที่คุณไม่สามารถยกเลิกการรับได้นอกจากจะปิดบัญชี<br />
                          จดหมายนี้จะแจ้งข่าวการเปลี่ยนแปลงบริการที่สำคัญ คุณลักษณะใหม่  การปรับปรุงด้านเทคนิค<br />
                          และข้อมูลเกี่ยวกับผลิตภัณฑ์และบริการอื่น ๆ<br />
  <br />
                          4.4 คลิปวีดีโอที่ถูกโพสบนหน้าเว็บ  เกิดขึ้นจากการ เผยแพร่ โดยสาธารณชน และ ได้เผยแพร่แบบอัตโนมัติ<br />
                          ผู้ดูแลเว็บไซต์แห่งนี้  ไม่จำเป็นต้องเห็นด้วย และไม่รับผิดชอบต่อข้อความใดๆ ผู้ชมจึงต้องใช้วิจารณญาณ<br />
                          ในการกลั่นกรองด้วยตัวเอง และถ้า  ท่านพบเห็นข้อความ หรือ คลิปวีดีโอ ใดๆ ที่  ขัดต่อกฎหมายและศีลธรรม<br />
                          กรุณาแจ้งมาที่ <a href="mailto:webmaster@guideclip.com">webmaster@Guideclip.com</a> เพื่อทีมงานจะได้ ดำเนิน การทันที ขอขอบพระคุณ </p></td>
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
                              <strong>ยอมรับเงื่อนไข</strong> &nbsp;
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
