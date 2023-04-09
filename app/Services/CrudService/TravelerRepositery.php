<?php

namespace App\Services\CrudService;

use App\Models\Traveler;
use App\Services\Contracts\TravelerCrudInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class TravelerRepositery implements TravelerCrudInterface
{
    public function __construct(protected Request $request)
    {
    }

    public function list(): Collection|array|null
    {
        return Traveler::query()->orderBy('id', 'DESC')->get();
    }

    public function store($request): Model|\Exception
    {
        try {
            Traveler::create($request);
            return Traveler::query()->orderBy('id', 'DESC')->first();
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function show(int $id): Model|null
    {
        return Traveler::query()->where('id', '=', $id)->first();
    }

    public function edit(int $id): Model|null
    {
        return Traveler::query()->where('id', '=', $id)->first();
    }

    public function update($request, $id): Model|\Exception
    {
        try {
            $data = Traveler::query()->where('id', '=', $id)->first();
            $data->update($request);
            return $data;
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        return Traveler::query()->where('id', '=', $id)->delete();
    }
}
