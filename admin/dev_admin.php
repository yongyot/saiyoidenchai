


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><!-- InstanceBegin template="/Templates/custom_content_layer_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>องค์การบริหารส่วนตำบลไทรย้อย อ.เด่นชัย จ.แพร่</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ที่อยู่:207 หมู่ 2 ตำบล ไทรย้อย อำเภอ เด่นชัย แพร่ 54110
โทรศัพท์:054 501 116">
<meta name="author" content="toptiersoft,toptiersoft.com,yongyot,yongyot.kha,yongyot khamma">
<link rel="shortcut icon" type="image/png" href="../themes/images/favicon.ico"/>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link id="callCss" rel="stylesheet" href="../themes/current/bootstrap.min.css" type="text/css" media="screen"/>
<link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="../themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../themes/lightbox/css/lightbox.css"/>
<link href="../themes/css/base.css" rel="stylesheet" type="text/css">
<link href="../themes/css/home.css" rel="stylesheet" type="text/css">
<style type="text/css" id="enject"></style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body  style="background: url(../themes/switch/images/pattern/pattern21.png) 0px 0px / cover repeat scroll;">
<!-- InstanceBeginEditable name="header_content" -->
<? 
include "chktype.php";
?>
<?
include "../themes/php/connect/connect.php";
	$description2_news=$_POST[description2_news];
$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

//echo $fileupload;

if ($fileupload) {
	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
		if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg"  or $lastname=="png" or $lastname=="pdf" or $lastname=="txt" or $lastname=="doc" or $lastname=="docx" or $lastname=="ppt" or $lastname=="xls" or $lastname=="xlsx") {
		copy($fileupload,"images/file/".$fileupload_name);	
	}
	}
//echo $fileupload_name;	
	
//echo $fileupload_name;	
if ($fileupload_name!="") {



		

$date_reg=date("Y-m-d H:i:s");
$sql="insert into tb_dev values('','$fileupload_name','dev','$description2_news','$date_reg')";
$result=mysql_db_query($dbname,$sql);

	{ ?>
<script language="javascript" >
		if(confirm("บันทึกสำเร็จ")) {
     window.location.href='../admin/index.php';
		}
			</script>
<? }

}	//end if?>
<!-- InstanceEndEditable -->
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
            <li class="active"><a href="../index.php">หน้าแรก</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลทั่วไป<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../vision.html" data-key="vision">วิสัยทัศน์</a></li>
                <li><a href="../general_basic.html" data-key="general_basic">สภาพทั่วไป</a></li>
                <li><a href="../general_economy.html" data-key="general_economy">สภาพเศรษฐกิจ</a></li>
                <li><a href="../general_social.html" data-key="general_social">สถาพสังคม</a></li>
                <li><a href="../general_service.html" data-key="general_service">การบริหารพื้นฐาน</a></li>
                <li><a href="../general_other.html" data-key="general_other">ข้อมูลอื่นๆ</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">บุคลากร<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a  href="../architech.html" data-key="architech">โครงสร้าง อบต.</a></li>
                <li><a  href="../excustive.html" data-key="excustive">คณะผู้บริหาร</a></li>
                <li><a  href="../member_org.html" data-key="member_org">สมาชิก อบต.</a></li>
                <li><a href="../member_tumbon.html" data-key="member_tumbon">สำนักงานปลัด</a></li>
                <li><a href="../member_klung.html" data-key="member_klung">กองคลัง</a></li>
                <li><a href="../member_yota.html" data-key="member_yota">กองช่าง</a></li>
                <li><a href="../member_educate.html" data-key="member_educate">กองการศึกษา</a></li>
              </ul>
            </li>
            <li ><a href="../kumnan.html" data-key="kumnan">กำนัน-ผู้ใหญ่บ้าน</a></li>
            <li class=""><a href="../power.html" data-key="power">อำนาจและหน้าที่</a></li>
            <li class=""><a href="../develop.php" data-key="develop">ยุทธศาสตร์การพัฒนา</a></li>
            <li ><a href="../webboard.php">กระดานสนทนา</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Ends================================================ -->

<section id="bodySection" >
  <div class="container">
    <div class="row">
      <div class="span3">
        <div class="well well-small">
          <h3>เมนูการจัดการระบบ</h3>
          <div class="well" style="padding: 8px 0;">
			<ul class="nav nav-list">
			 
               <li class="nav-header">จัดการ</li>
               
                 <li><a href="index.php"><i class="icon-cog"></i> หน้าแรก</a></li>
               
              <li><a href="news_activity_admin.php"><i class="icon-cog"></i> ข่าวกิจกรรม</a></li>
               <li><a href="news_pr_admin.php"><i class="icon-cog"></i> ข่าวประชาสัมพันธ์</a></li>
                <li><a href="news_auction_admin.php"><i class="icon-cog"></i> ข่าวจัดซื้อจัดจ้าง</a></li>
                 <li style="display:none"><a href="youtube_admin.php"><i class="icon-cog"></i> vdo youtube</a></li>
                  <li><a href="dev_admin.php"><i class="icon-cog"></i> ยุทธศาสตร์การพัฒนา</a></li>
                 <li><a href="news_fund_admin.php"><i class="icon-cog"></i> กองทุนหลักประกันสุขภาพ</a></li>
                 
                   <li><a href="news_people_admin.php"><i class="icon-cog"></i>คู่มือประชาชน</a></li>

  <li><a href="news_otop_admin.php?mode=otop"><i class="icon-cog"></i>ผลิตภัณท์เด่นของตำบล</a></li>
    <li><a href="news_otop_admin.php?mode=travel"><i class="icon-cog"></i>สถานที่สำคัญ-แหล่งท่องเที่ยว</a></li>
      <li><a href="news_otop_admin.php?mode=tradition"><i class="icon-cog"></i>ศิลปวัฒนธรรมประเพณี</a></li>
 <li><a href="news_otop_admin.php?mode=activitycenter"><i class="icon-cog"></i>ศูนย์บริการและถ่ายทอดเทคโนโลยีการเกษตรประจำตำบลไทรย้อย</a></li>

			  <li class="divider"></li>
			  <li><a href="logout.php"><i class="icon-flag"></i> ออกจากระบบ</a></li>
			</ul>
		  </div>
          <strong> </strong> </div>
        <br>

     
 
      </div>
      <div class="span9">
        <div class="well well-small" style="text-align:left"> 
            <link rel="stylesheet" type="text/css" href="../themes/textarea/src/bootstrap-wysihtml5.css"/>
           <link rel="stylesheet" type="text/css" href="../themes/css/table.css"/>
        <!-- InstanceBeginEditable name="content" -->
        ยุทธศาสตร์การพัฒนา<br/>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
        
            <tr>
              <th width="30" scope="col">&nbsp;</th>
              <th align="left" valign="top" scope="col"><?

include "../themes/php/connect/connect.php";

$sql9="select * from tb_dev  where  dev !='' "; 
$result9=mysql_db_query($dbname,$sql9);                                 
  $amount='1';
                                  
  while($record9=mysql_fetch_array($result9)) {
	$dev=$record9[dev];
	$id=$record9[id];
  
		echo "
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <th align='left' scope='col'><p class='body1-2'><img src='../images/Paper-Clip-icon.png' width='35' height='35' />ไฟล์แนบ : <a href='../images/file/$dev' target='_blank'>$dev</a></p>&nbsp;</th>
    <th width='10%'align='left' scope='col'><a href='../admin/update_dev.php?id=$id' onclick=\"return confirm(' แน่ใจว่าต้องการลบยุทธศาสตร์การพัฒนานี้?')\"><img src='../images/delete.jpg' border='0' /></a></th>
  </tr>
</table>   ";
	  $amount++;
			  }//end while	youtube4
			  

			  		  			  			  
			  
?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 
              
                     <tr>
                    <th scope="col"><form id="form1" name="form1" method="post" action="dev_admin.php" enctype="multipart/form-data">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th width="11%" align="left" valign="top" class="body1" scope="col">&nbsp;</th>
                            <th colspan="2" align="left" valign="top" class="body2-head" scope="col">เพิ่มไฟล์ข้อมูล</th>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="body1">&nbsp;</td>
                            <td width="13%" align="left" valign="top" class="body1">&nbsp;</td>
                            <td width="76%" align="left" valign="top" class="body1">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="body1">&nbsp;</td>
                            <td width="13%" align="left" valign="top" class="body1">รายละเอียด</td>
                            <td width="76%" align="left" valign="top" class="body1"><textarea class="textarea" name="description2_news" rows="20"   style="width:95%" ></textarea></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="body1">&nbsp;</td>
                            <td align="left" valign="top" class="body1">ไฟล์ : </td>
                            <td align="left" valign="top" class="body1"><input name="fileupload" type="file" size="47" /></td>
                          </tr>
                          <tr>
                            <td align="left" valign="top" class="body1">&nbsp;</td>
                            <td align="left" valign="top" class="body1">&nbsp;</td>
                            <td align="left" valign="top" class="body-color" style="color:#F00">* ไฟล์ .pdf เท่านั้น  </td>
                          </tr>
                          <tr align="center">
                            <td colspan="3" valign="top" class="body1">&nbsp;</td>
                          </tr>
                          <tr align="center">
                            <td colspan="3" valign="top" class="body1"><input type="submit" name="Submit" value="เพิ่มไฟล์" /></td>
                          </tr>
                        </table>
                      </form>
                </table>
          </table>
          <!-- InstanceEndEditable --> 

        </div>
      </div>
    </div>
  </div>
  <div style="text-align:right"> <a href="#" onClick="window.history.back()"><img title="ย้อนกลับ" src="../images/ip_icon_02_Back.png" width="30" height="30" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
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
        <p>อีเมล์ saiyoi@live.com ผู้ดูแลเว็บไซต์ <a href="../www.toptiersoft.com">Toptiersoft</a> โทร.0801555843</p>
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
          <p class="visible-phone visible-tablet" style="font-size:18px;" >Developed By <a href="../www.toptiersoft.com">Toptiersoft</a> โทร.0801555843</p>
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
<script src="../themes/js/jquery-1.8.3.min.js"></script> 
<script src="../themes/js/bootstrap.min.js"></script> 
<script src="../themes/js/bootstrap-tooltip.js"></script> 
<script src="../themes/js/bootstrap-popover.js"></script> 
<script type="text/javascript" src="../themes/lightbox/js/lightbox.js"></script> 
<script src="../themes/js/business_ltd_1.0.js"></script><!-- InstanceBeginEditable name="javacript" --><!-- InstanceEndEditable -->

        <script type="text/javascript" src="../themes/textarea/lib/js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../themes/textarea/src/bootstrap3-wysihtml5.js"></script>
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


<div id="secectionBox" >
  <link rel="stylesheet" href="../themes/switch/themeswitch.css" type="text/css" media="screen" />

  <div id="themeContainer" >
    <div id="hideme" class="themeTitle">Style Selector</div>
    <div class="themeName">Oregional Skin</div>
    <div class="images style"> <a href="../themes/css" name="current"><img src="../themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a> </div>
    <div class="themeName">Bootswatch Skins (11)</div>
    <div class="images style"> <a href="../themes/css" name="amelia" title="Amelia"><img src="../themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="spruce" title="Spruce"><img src="../themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a> <a href="../themes/css" name="superhero" title="Superhero"><img src="../themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="cyborg"><img src="../themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="cerulean"><img src="../themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="journal"><img src="../themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="readable"><img src="../themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="simplex"><img src="../themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="slate"><img src="../themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="spacelab"><img src="../themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="united"><img src="../themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
      <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
    </div>
    <div class="themeName">Background Patterns </div>
    <div class="images patterns"> <a href="../themes/css" name="pattern1"><img src="../themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern2"><img src="../themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern3"><img src="../themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern4"><img src="../themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern5"><img src="../themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern6"><img src="../themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern7"><img src="../themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern8"><img src="../themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern9"><img src="../themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern10"><img src="../themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern11"><img src="../themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern12"><img src="../themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern13"><img src="../themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern14"><img src="../themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern15"><img src="../themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern16"><img src="../themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern17"><img src="../themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern18"><img src="../themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern19"><img src="../themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern20"><img src="../themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a> <a href="../themes/css" name="pattern21"><img src="../themes/switch/images/pattern/pattern21.png" alt="bootstrap business templates" class="active"></a> </div>
  </div>
</div>
<span id="themesBtn" style="display:none"></span>
</body>
<!-- InstanceEnd --></html>
