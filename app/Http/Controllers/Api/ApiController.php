<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiTaskRequest;
use App\Models\Task;
use App\Repository\RepositoryTasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return RepositoryTasks::getAllTasks();
//        return view('api.index', compact('tasks'));
    }

    /**
     * @param ApiTaskRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ApiTaskRequest $request)
    {
        return RepositoryTasks::addNewTask($request);
    }

    /**
     * @param ApiTaskRequest $request
     * @param Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ApiTaskRequest $request, Task $task)
    {
        return RepositoryTasks::updateTask($request, $task);
    }

    /**
     * @param Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Task $task)
    {
        return RepositoryTasks::deleteTask($task);
    }
}
