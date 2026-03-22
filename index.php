<?php
include_once 'html5req.php';

error_reporting(E_ALL);

ini_set('display_errors', 1);

try {
    require_once 'pdo_connect.php';
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<nav>
    <a href="index.php">Home</a>
    <a href="changelog.php">Change Log</a>
</nav>

<div class="container-fluid">
    <h1>Connecting with PDO</h1>

    <?php
    if ($db) {
        echo "<p>" . "Connection succesful" . "</p>";
    } else {
        echo "<p>" . "Error" . "</p>";
    }

    include_once 'footer.php';
    ?>
</div>