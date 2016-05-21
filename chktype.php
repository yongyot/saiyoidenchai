<? 
include "themes/php/connect/connect.php";
session_start();
$sess_userid=$_SESSION[sess_userid];
$sess_username=$_SESSION[sess_username];

						$sqls="select * from tb_member where username='$sess_username' ";
						$results=mysql_db_query($dbname,$sqls);
						$records=mysql_fetch_array($results);
						
						$id_members=$records[id_member];
						$names=$records[username];
						$sqls="select * from tb_member where id_member='$id_members' ";
						$results=mysql_db_query($dbname,$sqls);
						$records=mysql_fetch_array($results);
						
						$emails=$records[email];
						$memtypes=$records[memtype];	
?>