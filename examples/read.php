<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = new User();
$usuarios = $user->find()->limit(2)->offset(10)->fetch(true);

/** @var  $item User */
foreach ($usuarios as $item) {
    dump($item->first_name, $item->adresses()->data());
}
