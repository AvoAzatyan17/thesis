<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AccountingStoreRequest;
use App\Services\Contracts\AccountingCrudInterface;
use App\Services\Contracts\TravelerCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TravelerController extends Controller
{
    private TravelerCrudInterface $travelerCrud;

    public function __construct(TravelerCrudInterface $travelerCrud)
    {
        $this->travelerCrud = $travelerCrud;
    }

    public function index(): View
    {
        $users = $this->travelerCrud->list();
        return view('/traveler/list', compact('users'));
    }

    public function create(): View
    {
        return view('/traveler/create');
    }

    public function store(AccountingStoreRequest $request): RedirectResponse
    {
        $user = $this->travelerCrud->store($request->all());
        return redirect(route('traveler.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->travelerCrud->show($id);
        return view('/traveler/show', compact('user'));
    }

    public function edit(int $id): View
    {
        $user = $this->travelerCrud->edit($id);
        return view('/traveler/edit', compact('user'));
    }

    public function update(AccountingStoreRequest $request, int $id): RedirectResponse
    {
        $user = $this->travelerCrud->update($request->all(), $id);
        return redirect(route('traveler.show', $user->id))->with("user", $user);
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = $this->travelerCrud->delete($id);
        return redirect(route('traveler.index'));
    }
}
