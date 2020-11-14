<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                                                <title>Admin</title>

</head>
<body>
<h1> ADMINISTRATION </h1>
<h2> Orders List </h2>
<?php
$db = new SQLite3('test.db');
$res = $db->query('SELECT * FROM orders');

while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['surname']} {$row['piwa']} {$row['ciastka']} \n ";

}
?>
</body>
</html>