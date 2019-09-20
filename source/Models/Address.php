<?php
/**
 * Created by PhpStorm.
 * User: thiag
 * Date: 20/09/2019
 * Time: 11:06
 */

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("address", ["user_id"], "id", false);
    }

    public function add(User $user, string $street, string $number): Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;
        return $this;
    }
}
