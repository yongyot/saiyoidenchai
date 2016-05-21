<?
$host="localhost";
$user="saiyoid1_org";
$pw="saiyoid1_org";
$dbname="saiyoid1_org2";
$c=mysql_connect($host,$user,$pw);
$res=mysql_query("SET NAMES utf8");

if (!$c) {
echo "ERROR : Can't connect database ";
exit();
}
?>
