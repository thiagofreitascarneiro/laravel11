<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest; 
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $user = $this->userService->createUser($request->validated());
        return response()->json($user, 201);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        try {
            $loginData = $this->userService->login($credentials);
            return response()->json($loginData, 200);
        } catch (ValidationException $exception) {
            return response()->json(['error' => $exception->errors()], 401);
        }
    }

    public function update(UserRequest $request, $id)
    {
        $user = $this->userService->updateUser(User::findOrFail($id), $request->validated());
        return response()->json($user);
    }

    public function destroy($id)
    {
        $this->userService->deleteUser(User::findOrFail($id));
        return response()->json(null, 204);
    }
}
