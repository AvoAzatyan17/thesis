<?php

namespace App\Services\CrudService;

use App\Models\Manager;
use App\Services\Contracts\ManagerCrudInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class ManagerRepositery implements ManagerCrudInterface
{
    public function __construct(protected Request $request)
    {
    }

    public function list(): Collection|array|null
    {
        return Manager::query()->orderBy('id', 'DESC')->where('user_type', '=', 2)->get();
    }

    public function store($request): Model|\Exception
    {
        try {
            Manager::create($request);
            return Manager::query()->orderBy('id', 'DESC')->first();
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function show(int $id): Model|null
    {
        return Manager::query()->where('id', '=', $id)->first();
    }

    public function edit(int $id): Model|null
    {
        return Manager::query()->where('id', '=', $id)->first();
    }

    public function update($request, $id): Model|\Exception
    {
        try {
            $data = Manager::query()->where('id', '=', $id)->first();
            $data->update($request);
            return $data;
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        return Manager::query()->where('id', '=', $id)->delete();
    }
}
