<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserTaskResource;
use App\Models\UserTask;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserTaskController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTasks = UserTask::all();

        return $this->sendResponse(UserTaskResource::collection($userTasks), 'Tasks retrieved successfully.');
    }


    /**
     * Store a newly created UserTask in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'user_id' => 'required|integer',
            'task_id' => 'required|integer',
            'due_date' => 'required|date',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'remark' => 'nullable|string',
            'status_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $userTask = UserTask::create($input);

        return $this->sendResponse(new UserTaskResource($userTask), 'User task created successfully.');
    }

    /**
     * Update the specified UserTask in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'user_id' => 'nullable|integer',
            'task_id' => 'nullable|integer',
            'due_date' => 'nullable|date',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'remark' => 'nullable|string',
            'status_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $userTask = UserTask::findOrFail($id);
        $userTask->fill($input)->save();

        return $this->sendResponse(new UserTaskResource($userTask), 'User task updated successfully.');
    }

    /**
     * Remove the specified UserTask from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userTask = UserTask::findOrFail($id);
        $userTask->delete();

        return $this->sendResponse([], 'User task deleted successfully.');
    }
}
