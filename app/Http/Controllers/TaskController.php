<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\User;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService; 
    }

    public function store(TaskRequest $request)
    {
        try {
            $task = $this->taskService->createTask($request->user(), $request->validated());
            return response()->json($task, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 409); 
        }
    }

    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->get();
        return response()->json($tasks);
    }

    public function update(TaskRequest $request, $id)
    {
        $task = $this->taskService->updateTask($request->user()->tasks()->findOrFail($id), $request->validated());
        return response()->json($task);
    }

    public function destroy(Request $request, $id)
    {
        $this->taskService->deleteTask($request->user()->tasks()->findOrFail($id));
        return response()->json(['message' => 'Task deleted successfully']);
    }

}
