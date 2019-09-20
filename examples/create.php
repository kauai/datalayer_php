<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 20/09/2019
 * Time: 11:35
 */

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
//FUNCIONA QUANDO O PRIMEIRO CADASTRADO É EXECUTADO
//EXECUTANDO O CADASTRO DO ENDEREÇO

$user = new User();
$user->first_name = "Php";
$user->last_name = "Developer";
$user->email = "php@gmail.com";
$user->password = "12345678";
$user->save();

$addr = new \Source\Models\Address();
$addr->add($user,"Augusto dos anjos","37");
$addr->save();

dump($user,$addr);
