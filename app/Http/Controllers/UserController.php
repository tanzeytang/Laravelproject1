<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class UserController extends Controller{

    public function createUser(){
        $user = new User();
        var_dump($user);
    }
}



?>