<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'answer_id' => $this ->id,
            'answer_text' => $this ->answer,
            'quiz_id' => $this ->quiz_id,
            'question_id' => $this ->question_id,
            'quiz' => new QuizResource($this->quiz),
            'question' => $this->question,


        ];
    }
}
