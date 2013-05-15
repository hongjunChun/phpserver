<?

$name = $_REQUEST['name'];

echo $name;
echo " welcome!";

$dbbase = 'projectcc';
$dbuser = 'root';
$dbpass = 'root93.net';
$dbhost = 'localhost:3306';

$dblink = mysql_connect($dbhost, $dbuser, $dbpass) or die("System down");

mysql_select_db($dbbase, $dblink) or die("Database Down");

?>
