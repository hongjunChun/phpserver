<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

$strout = "{ \"name\":";

$name = $_REQUEST['name'];

$strout .= "\"" . $name . "\", ";

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

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

if($db)
	$strDB = "true";
else
	$strDB = "false";
$strout .= "\"" . $strDB . "\"}";

echo $strout;

// query test
$qry_rst = mysql_query("SELECT * FROM `projectcc`.`user_table`");
$qry_row = mysql_fetch_array($qry_rst);

echo "{ \"name\":\"" . $qry_row["name"] . "\", \"id\":\"" . $qry_row["nick"] . "\"}";

mysql_close($dblink);

?>
