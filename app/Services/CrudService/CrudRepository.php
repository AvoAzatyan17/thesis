<?php

namespace App\Services\CrudService;

use App\Models\User;
use App\Services\Contracts\UserCrudInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class CrudRepository implements UserCrudInterface
{
    public function __construct(protected Request $request)
    {
    }

    public function list(): Collection|array|null
    {
        return User::query()->orderBy('id', 'DESC')->where('user_type', '=', 1)->get();
    }

    public function store($request): Model|\Exception
    {
        try {
            User::create($request);
            return User::query()->orderBy('id', 'DESC')->first();
        }catch (\Throwable $e){
            return $e;
        }
    }

    public function show(int $id): Model|null
    {
        return User::query()->where('id', '=', $id)->first();
    }

    public function edit(int $id): Model|null
    {
        return User::query()->where('id', '=', $id)->first();
    }

    public function update($request, $id): Model|\Exception
    {
        try {
            $data = User::query()->where('id', '=', $id)->first();
            $data->update($request);
            return $data;
        }catch (\Throwable $e)
        {
            return $e;
        }
    }

    public function delete(int $id)
    {
        return User::query()->where('id', '=', $id)->delete();
    }



}
