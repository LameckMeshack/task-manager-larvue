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
            'user' => $this->user->email_address,
            'task' => $this->task->name,
            'due_date' => $this->due_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'remark' => $this->remark,
            'status' => $this->status->name,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}


class StatusResource extends JsonResource
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
            'name' => $this->name,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
