<?php
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 20/09/2019
 * Time: 10:56
 */

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ['first_name', 'last_name']);
    }

    public function adresses()
    {
        return (new Address())->find("user_id = :id","id={$this->id}")->fetch();
    }

}
