<?php

namespace App\Http\Controllers;

class MemberController extends Controller{
    public function info($id,$name){
        return "member id is: ".$id." ". $name;

    }
}

?>