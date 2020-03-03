<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnswerResource;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
   public function index(){

       return AnswerResource::collection(Answer::paginate());
   }

    public function show($id){
        return new AnswerResource(Answer::find($id));
    }

}
