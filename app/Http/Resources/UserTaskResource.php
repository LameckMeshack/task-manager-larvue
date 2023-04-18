<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTaskResource extends JsonResource
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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'task_id' => $this->task_id,
            'due_date' => $this->due_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'remark' => $this->remark,
            'status_id' => $this->status_id,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
