<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

echo $there_is_no;

$strout = "{ \"name\":";

$name = $_REQUEST['name'];

$strout .= "\"" . $name . "\"";

echo $strout;

$dbbase = 'projectcc';
$dbuser = 'root';
$dbpass = 'root93.net';
$dbhost = 'localhost:3306';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass) or die("System down");

if($dblink)
	echo "DB Connect";
else
	echo "Failed DB Connect";

$db = mysql_select_db($dbbase, $dblink) or die("Database Down");

if($db)
	echo "DB Get";
else
	echo "Failed DB Get";

?>
