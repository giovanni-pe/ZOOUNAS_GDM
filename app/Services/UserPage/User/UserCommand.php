<?php

namespace App\Services\UserPage\User;
use App\Services\Service;

class UserCommand extends Service
{
    // Command Service here
    // Please generate StoreUserRequest using layerize:dto, must be same with request send by useCase
    public function store(StoreUserRequest $request){
        // Code for store data
    }

    // Please generate StoreUserRequest using layerize:dto, must be same with request send by useCase
    public function update(UpdateUserRequest $request, string $id){
        // Code for update data
    }

    public function delete(string $id){
        // Code for delete data
    }
}