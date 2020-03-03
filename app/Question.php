<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question','section_id',
    ];

    public function section(){
        return $this->belongsTo(Section::class,'section_id' , 'id');
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
