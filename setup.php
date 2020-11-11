<?php


$ver = SQLite3::version();

echo $ver['versionString'] . "\n";
echo $ver['versionNumber'] . "\n";

var_dump($ver);

$db = new SQLite3('test.db');

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";

$db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, surname TEXT, piwa VALUE, ciastka VALUE)");

