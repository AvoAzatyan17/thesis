<?php

namespace App\Services\Contracts;

interface ToursCrudInterface
{
    public function list();

    public function store($request);

    public function edit(int $id);

    public function show(int $id);

    public function update($request, $id);

    public function delete(int $id);
}
