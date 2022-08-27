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
    public function index()
    {
        RepositoryTasks::getAllTasks();

//        return view('api.index', compact('tasks'));
    }

    public function store(ApiTaskRequest $request)
    {
        RepositoryTasks::addNewTask($request);
    }

    public function update(ApiTaskRequest $request, Task $task)
    {
        RepositoryTasks::updateTask($request, $task);
    }

    public function destroy(Task $task)
    {
        RepositoryTasks::deleteTask($task);
    }
}
