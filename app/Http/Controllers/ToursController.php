<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AccountingStoreRequest;
use App\Services\Contracts\ToursCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ToursController extends Controller
{
    private ToursCrudInterface $toursCrud;

    public function __construct(ToursCrudInterface $toursCrud)
    {
        $this->toursCrud = $toursCrud;
    }

    public function index(): View
    {
        $tours = $this->toursCrud->list();
        return view('/tours/list', compact('tours'));
    }

    public function create(): View
    {
        return view('/tours/create');
    }

    public function store(AccountingStoreRequest $request): RedirectResponse
    {
        $user = $this->toursCrud->store($request->all());
        return redirect(route('tours.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->toursCrud->show($id);
        return view('/tours/show', compact('user'));
    }

    public function edit(int $id): View
    {
        $user = $this->toursCrud->edit($id);
        return view('/tours/edit', compact('user'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $user = $this->toursCrud->update($request->all(), $id);
        return redirect(route('tours.show', $user->id))->with("user", $user);
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = $this->toursCrud->delete($id);
        return redirect(route('tours.index'));
    }
}
