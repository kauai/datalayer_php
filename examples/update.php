<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 20/09/2019
 * Time: 11:35
 */

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById('92');
$user->first_name = "Javascript";
$user->last_name = "Web Developer";
$user->save();
dump($user);
