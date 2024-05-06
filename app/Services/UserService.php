<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser(array $data): User
    {
        $existingUser = User::where('email', $data['email'])->first();

        if ($existingUser) {
            throw new \Exception('O usuário já existe.', 409);
        }
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function login(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas são inválidas.'],
            ]);
        }
    /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }
    
    public function getAllUsers()
    {
        return User::all();
    }

    /**
     *
     * @param User 
     * @param array 
     * @return User
     */

    public function updateUser(User $user, array $data): User
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return $user;
    }

    /**
     * @param User 
     * @return void
     */
    public function deleteUser(User $user): void
    {
        $user->delete();
    }

}