?<php
$dbhost = "cirrus.cazdizvhsu30.eu-west-1.rds.amazonaws.com";
$dbuser = "travis";
$dbpass = "wp9sqxj97";
$dbname = "dbtuts";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
mysql_select_db($dbname) or die('database selection problem');
?>
