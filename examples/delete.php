<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById('92');

if($user){
    $user->destroy();
}else{
    dump($user);
}

