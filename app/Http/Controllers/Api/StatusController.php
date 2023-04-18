<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\StatusResource;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Status;

class StatusController extends BaseController
{
    public function index()
    {
        $status = Status::all();
        return $this->sendResponse(StatusResource::collection($status), 'Tasks retrieved successfully.');
    }
}
