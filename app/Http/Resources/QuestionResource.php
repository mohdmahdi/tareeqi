<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'question_id' => $this->id,
            'question_text' => $this->question,
            'section_id' => $this->section_id,
            'section' => new SectionResource($this->section),
            'answer' =>  AnswerResource::collection($this->answers),
        ];
    }
}
