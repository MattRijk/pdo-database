<?php include 'pdo_connect.php'; ?>

<?php 
try {
    require_once 'pdo_connect.php';
    $sql = 'SELECT Name, Continent, Population FROM Country';
    $result = $db->query($sql);
    $all = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO SELECT Loop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
    <h1>PDO: Looping Directly over a SELECT Query</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
?>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Continent</th>
        <th>Population</th>
    </tr>
    <!--<?php while ($row = $result-> fetch()) { ?>-->
    <!--<tr>-->
    <!--    <td><?php echo $row[0]; ?></td>-->
    <!--    <td><?php echo $row['Continent']; ?></td>-->
    <!--    <td><?php echo $row['Population']; ?></td>-->
    <!--</tr>-->
    <!--<?php } ?>-->
    
   <!-- <//?php foreach ($db->query($sql) as $row) { ?>-->
   <!-- <tr>-->
   <!--     <td><//?php echo $row['Name']; ?></td>-->
   <!--     <td><//?php echo $row['Continent']; ?></td>-->
   <!--     <td><//?php echo $row['Population']; ?></td>-->
   <!-- </tr>-->
   <!--<//?php } ?>-->
   
   <pre>
       <?php print_r($all); ?>
   </pre>
</table>
</div>



</body>
</html>