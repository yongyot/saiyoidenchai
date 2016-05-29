

<?php
// we connect to example.com and port 3307

$dbname="saiyoid1_org2.tb_dev";
$c = mysql_connect('localhost', 'root', 'p@$$w0rd');
$res=mysql_query("SET NAMES utf8");
if (!$c) {
echo "ERROR : Can't connect database ";
exit();
}
?>
