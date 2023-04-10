<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AccountingStoreRequest;
use App\Services\Contracts\ToursCrudInterface;
use App\Services\Contracts\TravelerCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TravelerController extends Controller
{
    private TravelerCrudInterface $travelerCrud;
    private ToursCrudInterface $tourCrud;

    public function __construct(TravelerCrudInterface $travelerCrud,ToursCrudInterface $tourCrud)
    {
        $this->travelerCrud = $travelerCrud;
        $this->tourCrud = $tourCrud;
    }

    public function index(): View
    {
        $users = $this->travelerCrud->list();
        $tours = $this->tourCrud->list();
        return view('/traveler/list', compact('users','tours'));
    }

    public function create(): View
    {
        $tours = $this->tourCrud->list();
        return view('/traveler/create', compact('tours'));
    }

    public function store(AccountingStoreRequest $request): RedirectResponse
    {
        $user = $this->travelerCrud->store($request->all());
        return redirect(route('traveler.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->travelerCrud->show($id);
        $tours = $this->tourCrud->list();
        return view('/traveler/show', compact('user','tours'));
    }

    public function edit(int $id): View
    {
        $user = $this->travelerCrud->edit($id);
        $tours = $this->tourCrud->list();
        return view('/traveler/edit', compact('user','tours'));
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
