<?php

namespace App\Action\Api\Task;

use App\Models\Task;

class TaskApiGetListAction
{
    public function __invoke()
    {
        return Task::query()
            ->with(["user", "status"])
            ->where("user_id", auth()->id())
            ->paginate(50);
    }
}
