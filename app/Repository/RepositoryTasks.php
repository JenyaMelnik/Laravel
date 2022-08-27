<?php


namespace App\Repository;

use App\Models\Task;
use Illuminate\Support\Facades\DB;


class RepositoryTasks
{
    public static function getAllTasks()
    {
        $tasks = Task::all();
        return response()->json([
            'tasks' => $tasks
        ], 200);
    }

    public static function addNewTask($newTask)
    {
        $task = Task::create($newTask->all());

        return response()->json([
            'message' => 'Task added',
            'task' => $task
        ], 200);
    }

    public static function updateTask($request, $task)
    {
        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated successfully!',
            'task' => $task
        ], 200);
    }

    public static function deleteTask($task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Task deleted successfully!',
            'task' => $task
        ], 200);
    }
}
