<?php //phpinfo();

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'maindb';
    $user = 'admin';
    $pass = 'Admin@123';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}