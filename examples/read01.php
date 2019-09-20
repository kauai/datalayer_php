<?php
require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;

$con = Connect::getInstance();
$error = Connect::getError();

if ($error) {
  echo $error->getMessage();
  die;
}

$query = $con->query("SELECT * FROM users");
dump($query->fetchAll());

