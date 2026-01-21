<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StatusApiController extends Controller
{
    public function actionGet()
    {
        return response()->json(Status::all());
    }
}
