<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
  public function index(){

      return  SectionResource::collection(Section::paginate());
  }

    public function show($id){
        return new SectionResource(Section::find($id));
    }
}
