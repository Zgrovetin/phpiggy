<?php

include __DIR__ . '/src/Framework/Database.php';

require __DIR__ . "/vendor/autoload.php"; //exercise1

use Framework\Database;
use Dotenv\Dotenv;      //exercise2
use App\Config\Paths;   //exercise5

$dotenv = Dotenv::createImmutable(Paths::ROOT); //exercise3
$dotenv->load();                                //exercise3

// $db = new Database('mysql', [ //before exercise4
//     'host' => 'localhost',          //before exercise4
//     'port' => 3306,          //before exercise4
//     'dbname' => 'phpiggy'         //before exercise4
// ], 'root', '');   //before exercise4

$db = new Database($_ENV['DB_DRIVER'], [ //exercise4
    'host' => $_ENV['DB_HOST'],          //exercise4
    'port' => $_ENV['DB_PORT'],          //exercise4
    'dbname' => $_ENV['DB_NAME']         //exercise4
], $_ENV['DB_USER'], $_ENV['DB_PASS']);   //exercise4

$sqlFile = file_get_contents("./database.sql");

$db->query($sqlFile);



// try {
//     $db->connection->beginTransaction();

//     $db->connection->query("INSERT INTO products VALUES(99, 'Gloves')");

//     $search = "Hats";
//     $query = "SELECT * FROM products WHERE name=:name";

//     $stmt = $db->connection->prepare($query);

//     $stmt->bindValue('name', 'Gloves', PDO::PARAM_STR);

//     $stmt->execute();

//     var_dump($stmt->fetchALL(PDO::FETCH_OBJ));

//     $db->connection->commit();
// } catch (Exception $error) {
//     if ($db->connection->inTransaction()) {
//         $db->connection->rollBack();
//     }
//     echo "Transaction failed!";
// }
