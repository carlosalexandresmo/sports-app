<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GameRepository
{
    public function create(array $data): array
    {
        $user = User::create($data)->toArray();
        Auth::login($user);
        return $user;
    }

    public function update(array $data, int $id): array
    {
        return [];
    }

    public function delete(int $id): void {}

    public function find(int $id): ?object
    {
        return new \stdClass();
    }

    public function findAll(): array
    {
        return [];
    }
}