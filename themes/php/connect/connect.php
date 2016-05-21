

<?php
// we connect to example.com and port 3307

$dbname="saiyoid1_org2";
$c = mysql_connect('localhost', 'saiyoid1_org2', 'saiyoid1_org2');
$res=mysql_query("SET NAMES utf8");
if (!$c) {
echo "ERROR : Can't connect database ";
exit();
}
?>
