<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return UserResource::collection(User::paginate());
    }

    public function show($id){
        return new UserResource(User::find($id));
    }
}
