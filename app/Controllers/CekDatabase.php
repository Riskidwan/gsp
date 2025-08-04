<?php

namespace App\Controllers;

use App\Models\UserModel;

class CekDatabase extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
    }
}
