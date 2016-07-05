<?php include 'pdo_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Database Connection with PDO</title>
    <link href="" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Connecting with PDO</h1>
<?php if ($db) {
    echo "<p>Connection successful.</p>";
} elseif (isset($error)) {
    echo"<p>$error</p>";
}
?>
</body>
</html>