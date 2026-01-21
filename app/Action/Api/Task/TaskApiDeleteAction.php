<?php

namespace App\Action\Api\Task;

use App\Models\Task;

class TaskApiDeleteAction
{
    public function __invoke(int $id)
    {
        return Task::query()
            ->where("id", $id)
            ->where("user_id", auth()->id())
            ->delete();
    }
}
