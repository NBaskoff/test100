<?php

use App\Http\Controllers\Api\TaskApiController;
use App\Http\Controllers\Api\StatusApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "auth:sanctum"], function () {
    Route::get("/user", function (Request $request) {
        return $request->user();
    });

    Route::get("/status", [StatusApiController::class, "actionGet"]);

    Route::get("/tasks/{id}", [TaskApiController::class, "actionGetOne"]);
    Route::get("/tasks", [TaskApiController::class, "actionGetList"]);
    Route::put("/tasks/{id}", [TaskApiController::class, "actionPut"]);
    Route::post("/tasks", [TaskApiController::class, "actionPost"]);
    Route::delete("/tasks", [TaskApiController::class, "actionDelete"]);
});


