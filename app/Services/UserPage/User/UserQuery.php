<?php

namespace App\Services\UserPage\User;
use App\Services\Service;

class UserQuery extends Service
{
    public function __construct(){
        // self::setModel(User::class); call your model class name to use General Service Function
    }

    // Other Query Service here
    public function getCustomQuery(string $id){
        // Other code here if query not support in getByAttr method
    }
}