<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
Use Log;

class UserController extends Controller
{
    public function getAll(){
      $data =  User::join("user_domicilio", "user_domicilio.user_id", "=", "users.id")
      ->select("*")
      ->get();
      return response()->json($data, 200);
    }

}
