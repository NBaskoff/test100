<?php

namespace App\Action\Api\Task;

use App\Models\Task;

class TaskApiGetOneAction
{
    public function __invoke(int $id)
    {
        return Task::query()
            ->with(["user", "status"])
            ->where("id", $id)
            ->where("user_id", auth()->id())
            ->firstOrFail();
    }
}
