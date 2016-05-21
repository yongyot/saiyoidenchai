<?
include "themes/php/connect/connect.php";
$objDB = mysql_select_db($dbname);
$txtDetails = $_POST["txtDetails"];
$txtName = $_POST["txtName"];
if($_GET["Action"] == "Save")
{
	if($txtDetails !="" && $txtName != ""){
	//*** Insert Reply ***//
	$strSQL = "INSERT INTO reply ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysql_query($strSQL);
	
	//*** Update Reply ***//
	$strSQL = "UPDATE webboard ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	}else{
		
		
	{ ?>
<script language="javascript" >
			alert("กรุณากรอกข้อมูลให้ครบ");
			</script>
<? }
		
		
		
		
		
		}	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><!-- InstanceBegin template="/Templates/custom_content_layer_one.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>องค์การบริหารส่วนตำบลไทรย้อย อ.เด่นชัย จ.แพร่</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ที่อยู่:207 หมู่ 2 ตำบล ไทรย้อย อำเภอ เด่นชัย แพร่ 54110
โทรศัพท์:054 501 116">
<meta name="author" content="toptiersoft,toptiersoft.com,yongyot,yongyot.kha,yongyot khamma">
<link rel="shortcut icon" type="image/png" href="themes/images/favicon.ico"/>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="themes/lightbox/css/lightbox.css"/>
<link href="themes/css/base.css" rel="stylesheet" type="text/css">
<link href="themes/css/home.css" rel="stylesheet" type="text/css">
<style type="text/css" id="enject"></style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- Menu --> 

<!--Header Ends================================================ --> 
<!-- Page banner -->
<section id="bannerSection_content" >
  <div class="container" >
    <h1 id="pageTitle"> อบต.ไทรย้อย </h1>
  </div>
</section>

<!-- Menu -->

<section id="headerSection">
  <div class="container">
    <div class="navbar">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1><a class="brand" href="#"> <small></small></a></h1>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li class="active"><a href="index.php">หน้าแรก</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลทั่วไป<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="vision.html" data-key="vision">วิสัยทัศน์</a></li>
                <li><a href="general_basic.html" data-key="general_basic">สภาพทั่วไป</a></li>
                <li><a href="general_economy.html" data-key="general_economy">สภาพเศรษฐกิจ</a></li>
                <li><a href="general_social.html" data-key="general_social">สถาพสังคม</a></li>
                <li><a href="general_service.html" data-key="general_service">การบริหารพื้นฐาน</a></li>
                <li><a href="general_other.html" data-key="general_other">ข้อมูลอื่นๆ</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">บุคลากร<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a  href="architech.html" data-key="architech">โครงสร้าง อบต.</a></li>
                <li><a  href="excustive.html" data-key="excustive">คณะผู้บริหาร</a></li>
                <li><a  href="member_org.html" data-key="member_org">สมาชิก อบต.</a></li>
                <li><a href="member_tumbon.html" data-key="member_tumbon">สำนักงานปลัด</a></li>
                <li><a href="member_klung.html" data-key="member_klung">กองคลัง</a></li>
                <li><a href="member_yota.html" data-key="member_yota">กองช่าง</a></li>
                <li><a href="member_educate.html" data-key="member_educate">กองการศึกษา</a></li>
              </ul>
            </li>
            <li ><a href="kumnan.html" data-key="kumnan">กำนัน-ผู้ใหญ่บ้าน</a></li>
            <li class=""><a href="power.html" data-key="power">อำนาจและหน้าที่</a></li>
            <li class=""><a href="develop.php" data-key="develop">ยุทธศาสตร์การพัฒนา</a></li>
               <li ><a href="webboard.php">กระดานสนทนา</a></li> 
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Ends================================================ --> 

<!-- Page banner end -->
<section id="bodySection" >
  <div class="container">
    <div class="well"><!-- InstanceBeginEditable name="content" -->
            <script type="text/javascript">
      var verifyCallback = function(response) {
        if(response){
			
			$('#bnt_submit').prop("disabled", false);
			}
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.

        grecaptcha.render('example3', {
          'sitekey' : '6LeT4RYTAAAAAHF9RgUnL3g5j2RqEp31CQ12vu7Z',
          'callback' : verifyCallback,
          'theme' : 'light'
        });
      };
    </script>
    
<link rel="stylesheet" type="text/css" href="themes/textarea/src/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css" href="themes/css/table.css"/>
      
      
      <?
//*** Select Question ***//
$strSQL = "SELECT * FROM webboard  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);

//*** Update View ***//
$strSQL = "UPDATE webboard ";
$strSQL .="SET View = View + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysql_query($strSQL);	
?>
    <div style="overflow:auto"  class="datagrid">
<table class="table table-striped table-bordered">
  <tr>
    <td colspan="2"><center><h1><?=$objResult["Question"];?></h1></center></td>
  </tr>
  <tr>
    <td height="53" colspan="2"><?=nl2br($objResult["Details"]);?></td>
  </tr>
  <tr>
    <td width="397">ชื่อ : <?=$objResult["Name"];?> วันที่ตั้ง : <?=$objResult["CreateDate"];?></td>
    <td width="253">อ่าน : <?=$objResult["View"];?> ตอบ : <?=$objResult["Reply"];?></td>
  </tr>
</table>
</div>
<br>
<br>
<?
$intRows = 0;
$strSQL2 = "SELECT * FROM reply  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysql_fetch_array($objQuery2))
{
	$intRows++;
?> 
    <div style="overflow:auto"  class="datagrid">
<table class="table table-striped table-bordered">
  <tr>
    <td height="53" colspan="2">ลำดับ : <?=$intRows;?>  <?=nl2br($objResult2["Details"]);?></td>
  </tr>
  <tr>
    <td width="397">ชื่อ :
        <?=$objResult2["Name"];?>      </td>
    <td width="253">วันที่ตั้ง :
    <?=$objResult2["CreateDate"];?></td>
  </tr>
</table>
</div>
<?
}
?>
<br>
<a href="webboard.php">Back to Webboard</a> <br>
<br>
<form action="ViewWebboard.php?QuestionID=<?=$_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
  <table class="table table-striped table-bordered">
    <tr>
      <td width="78">เนื้อหา
            <span style="color:#F00">*</span>
      </td>
      <td><textarea name="txtDetails"  class="textarea"  style="width:90%" rows="15" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="78">ชื่อ
            <span style="color:#F00">*</span>
      </td>
      <td width="647"><input name="txtName" style="width:90%" type="text" id="txtName" value="" size="50"></td>
    </tr>
    <tr>
    <td></td>
    <td>
      <div id="example3"></div>
    
    </td>
    </tr>
  </table>
  
  <div class="form-actions">
  

		<button type="submit" id="bnt_submit" disabled="disabled" class="btn btn-primary" name="btnSave">ตอบกระทู้</button>
			
                <a href="webboard.php" class="btn">ยกเลิก</a>
			  </div>
</form>
      
      <!-- InstanceEndEditable --> 
    
    
    
    
    
    </div>
    <div style="text-align:right"> <a href="#" onclick="window.history.back()"><img title="ย้อนกลับ" src="images/ip_icon_02_Back.png" width="30" height="30" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
  </div>
</section>

<!-- Footer
  ================================================== -->
<section id="footerSection">
  <div class="container" > 
    <!-- <p style="padding:18px 0 44px">&copy; 2012, allright reserved </p>-->
    
    <div class="row-fluid">
      <div class="span6 hidden-phone hidden-tablet"  style="font-size:18px"  >
        <p style="padding-top: 110px;">
        <p>องค์การบริหารส่วนตำบลไทรย้อย เลขที่ 207 หมู่ 2 ตำบล ไทรย้อย อำเภอ เด่นชัย จังหวัด แพร่ 54110 โทร. 054-520573</p>
        <p>อีเมล์ saiyoi@live.com ผู้ดูแลเว็บไซต์ <a href="www.toptiersoft.com">Toptiersoft</a> โทร.0801555843</p>
        <p>Copyright © 2016 Saiyoidenchai.go.th All Rights Reserved.</p>
        </p>
      </div>
      <div class="span6">
        <div class="comtaint">
          <p> รับเรื่องร้องเรียน </p>
          <p> โทร : 054-520573 หรือ </p>
          <p> เบอร์นายก 0818828495</p>
          <p class="comtaint_button">
           <button class="btn btn-warning btn-large"  onclick="window.location.href='contact_form.php';">คลิ๊ก</button>
          </p>
          <p class="visible-phone visible-tablet" style="font-size:18px;" >Developed By <a href="www.toptiersoft.com">Toptiersoft</a> โทร.0801555843</p>
        </div>
      </div>
    </div>
    </footer>
  </div>
  <!-- /container --> 
</section>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a> 
<!-- Javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
<script src="themes/js/jquery-1.8.3.min.js"></script> 
<script src="themes/js/bootstrap.min.js"></script> 
<script src="themes/js/bootstrap-tooltip.js"></script> 
<script src="themes/js/bootstrap-popover.js"></script> 
<script type="text/javascript" src="themes/lightbox/js/lightbox.js"></script> 
<script src="themes/js/business_ltd_1.0.js"></script><!-- InstanceBeginEditable name="javacript" -->
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
<script type="text/javascript" src="themes/textarea/lib/js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="themes/textarea/src/bootstrap3-wysihtml5.js"></script>

<script>

$('.textarea').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": true, //Button to insert a link. Default true
    "image": true, //Button to insert an image. Default true,
    "color": true, //Button to change color of font  
    "blockquote": true, //Blockquote  
  
});
</script>

<!-- InstanceEndEditable -->


<div id="secectionBox" >
  <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
  <script src="themes/switch/theamswitcher_content.js" type="text/javascript" charset="utf-8"></script>
  <div id="themeContainer" >
    <div id="hideme" class="themeTitle">Style Selector</div>
    <div class="themeName">Oregional Skin</div>
    <div class="images style"> <a href="themes/css" name="current"><img src="themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a> </div>
    <div class="themeName">Bootswatch Skins (11)</div>
    <div class="images style"> <a href="themes/css" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a> <a href="themes/css" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a> <a href="themes/css" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a> <a href="themes/css" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a> <a href="themes/css" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a> <a href="themes/css" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a> <a href="themes/css" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a> <a href="themes/css" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a> <a href="themes/css" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a> <a href="themes/css" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a> <a href="themes/css" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
      <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
    </div>
    <div class="themeName">Background Patterns </div>
    <div class="images patterns"> <a href="themes/css" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a> <a href="themes/css" name="pattern21"><img src="themes/switch/images/pattern/pattern21.png" alt="bootstrap business templates" class="active"></a> </div>
  </div>
</div>
<span id="themesBtn" style="display:none"></span>
</body>
<!-- InstanceEnd --></html>
