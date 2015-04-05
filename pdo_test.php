<?php
   error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
    try{
        require_once 'pdo_connect.php';
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Connection with PDO</title>
</head>
<body>
    <h1>Connecting with PDO</h1>
    <?php if($db){
        echo "<p>" . "Connection succesful" . "</p>";
    } elseif (){
        echo "<p>" . "Error" . "</p>";
    }
    ?>
</body>
</html>