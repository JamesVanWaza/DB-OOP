<?php
include_once 'htm5req,php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
	require_once 'pdo_connect.php';
} catch (Exception $e) {
	$error = $e->getMessage();
}
?>
<h1>Connecting with PDO</h1>
<?php
if ($db) {
	echo "<p>" . "Connection succesful" . "</p>";
} else {
	echo "<p>" . "Error" . "</p>";
}
include_once 'footer.php';
?>