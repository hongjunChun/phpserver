<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

$strout = "{ \"name\":";

$name = $_REQUEST['name'];

$strout .= "\"" . $name . "\" ";

echo $strout;

$dbbase = 'projectcc';
$dbuser = 'root';
$dbpass = 'root93.net';
$dbhost = 'localhost:3306';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass) or die("System down");

$strout .= "\"dbconnect\":";

$strDB = "false";

if($dblink)
	$strDB = "true";
else
	$strDB = "false";

$db = mysql_select_db($dbbase, $dblink) or die("Database Down");

if($db)
	$strDB = "true";
else
	$strDB = "false";
$strDB .= "\"" . strDB . "\"} }";

?>
