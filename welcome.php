<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                                                <title>DataBase</title>
</head>


<body>
<h2> Baza zamowien </h2>
<?php



 $imie = $_POST["name"];
 $sur = $_POST["surname"];
 $piwa = $_POST["piwa"];
 $ciastka = $_POST["ciastka"];
 $db = new SQLite3('test.db');




$db->exec("INSERT INTO cars(name, surname, piwa, ciastka) VALUES('$imie', '$sur', '$piwa', '$ciastka')");


$res = $db->query('SELECT * FROM cars');

while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['surname']} {$row['piwa']} {$row['ciastka']} \n ";

}
?>
<h3> Twoje zamówienie </h3>



    Name: <?php echo $imie ; ?><br>
    Surname: <?php echo $sur ; ?><br>
    Piwa: <?php echo $piwa ;?><br>
    Ciastka: <?php echo $ciastka ;?><br>



</body>
</html>

