<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuizResource;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        return QuizResource::collection(Quiz::paginate());
    }

    public function show($id){
        return new QuizResource(Quiz::find($id));
    }
}
