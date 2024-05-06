<?php
namespace App\Services;

use App\Models\Task;
use App\Models\User;

class TaskService
{
    public function createTask(User $user, array $data): Task
    {
        
        $existingTask = $user->tasks()->where('title', $data['title'])->first();
        
        if ($existingTask) {
            throw new \Exception("A task with the same title already exists.");
        }

        return $user->tasks()->create($data);
    }

    public function updateTask(Task $task, array $data): Task
    {
        $task->update($data);
        return $task;
    }

    public function deleteTask(Task $task): void
    {
        $task->delete();
    }
}

