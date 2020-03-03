<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer','quiz_id','question_id',
    ];

    public function quiz(){
        return $this->belongsTo(Quiz::class,'quiz_id' , 'id');
    }

    public function question(){
        return $this->belongsTo(Question::class ,'question_id' ,'id');
    }
}
