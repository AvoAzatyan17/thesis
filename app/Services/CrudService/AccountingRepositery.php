<?php

namespace App\Services\CrudService;

use App\Models\Accounting;
use App\Services\Contracts\AccountingCrudInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class AccountingRepositery implements AccountingCrudInterface
{
    public function __construct(protected Request $request)
    {
    }

    public function list(): Collection|array|null
    {
        return Accounting::query()->orderBy('id', 'DESC')->where('user_type', '=', 3)->get();
    }

    public function store($request): Model|\Exception
    {
        try {
            Accounting::create($request);
            return Accounting::query()->orderBy('id', 'DESC')->first();
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function show(int $id): Model|null
    {
        return Accounting::query()->where('id', '=', $id)->first();
    }

    public function edit(int $id): Model|null
    {
        return Accounting::query()->where('id', '=', $id)->first();
    }

    public function update($request, $id): Model|\Exception
    {
        try {
            $data = Accounting::query()->where('id', '=', $id)->first();
            $data->update($request);
            return $data;
        } catch (\Throwable $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        return Accounting::query()->where('id', '=', $id)->delete();
    }
}
