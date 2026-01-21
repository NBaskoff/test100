<?php

namespace App\Action\Api\Task;

use App\Models\Task;

class TaskApiPutAction
{
    public function __invoke($request, $id)
    {
        $task = Task::query()->findOrFail($id, ["tasks.user_id" => auth()->id()]);
        $task->fill(request()->all());
        $task->save();
        return $task;
    }
}
