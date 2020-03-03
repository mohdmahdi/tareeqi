<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return QuestionResource::collection(Question::paginate());
    }

    public function show($id){
        return new QuestionResource(Question::find($id));
    }
}
