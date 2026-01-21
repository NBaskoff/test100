<?php

namespace App\Http\Controllers\Api;

use App\Action\Api\Task\TaskApiDeleteAction;
use App\Action\Api\Task\TaskApiGetListAction;
use App\Action\Api\Task\TaskApiGetOneAction;
use App\Action\Api\Task\TaskApiPostAction;
use App\Action\Api\Task\TaskApiPutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApiTaskRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Gate;

class TaskApiController extends Controller
{
    public function actionGetOne(TaskApiGetOneAction $action, int $id): JsonResponse
    {
        return response()->json($action($id));
    }

    public function actionGetList(TaskApiGetListAction $action): JsonResponse
    {
        return response()->json($action());
    }

    public function actionPost(ApiTaskRequest $request, TaskApiPostAction $action): JsonResponse
    {
        return response()->json($action($request));
    }

    public function actionPut(ApiTaskRequest $request, TaskApiPutAction $action, int $id): JsonResponse
    {
        return response()->json($action($request, $id));
    }

    public function actionDelete(TaskApiDeleteAction $action, int $id): JsonResponse
    {
        return response()->json($action($id));
    }
}
