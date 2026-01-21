<?php

namespace App\Action\Api\Task;

use App\Models\Task;

class TaskApiPostAction
{
    public function __invoke($request)
    {
        $task = new Task();
        $task->fill(request()->all());
        $task->user_id = auth()->id();
        $task->save();
        return $task;
    }
}
