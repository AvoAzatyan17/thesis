<?php

namespace App\Services\CrudService;

use App\Models\Accounting;
use App\Models\Tour;
use App\Services\Contracts\ToursCrudInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class ToursRepositery implements ToursCrudInterface
{
    public function __construct(protected Request $request)
    {
    }

    public function list(): Collection|array|null
    {
        return Tour::query()->orderBy('id', 'DESC')->get();
    }

    public function store($request): Model|\Exception
    {
        try {
            Tour::create($request);
            return Tour::query()->orderBy('id', 'DESC')->first();
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function show(int $id): Model|null
    {
        return Tour::query()->where('id', '=', $id)->first();
    }

    public function edit(int $id): Model|null
    {
        return Tour::query()->where('id', '=', $id)->first();
    }

    public function update($request, $id): Model|\Exception
    {
        try {
            $data = Tour::query()->where('id', '=', $id)->first();
            $data->update($request);
            return $data;
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        return Tour::query()->where('id', '=', $id)->delete();
    }
}
