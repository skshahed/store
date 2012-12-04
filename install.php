<?php
if (!file_exists('db.inc.php')){
$file = 'db.inc.php';
$current = "<?php
define('MYSQL_HOST' , 'localhost');
define('MYSQL_USER', ' ');
define('MYSQL_PASSWORD', ' ');
define('MYSQL_DB', ' ');
?>
";
file_put_contents($file, $current);
} else {
	echo 'File already exits.';
}
?>