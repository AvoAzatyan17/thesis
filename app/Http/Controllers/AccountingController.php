<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AccountingStoreRequest;
use App\Services\Contracts\AccountingCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountingController extends Controller
{
    private AccountingCrudInterface $accountingCrud;

    public function __construct(AccountingCrudInterface $accountingCrud)
    {
        $this->accountingCrud = $accountingCrud;
    }

    public function index(): View
    {
        $users = $this->accountingCrud->list();
        return view('/accounting/list', compact('users'));
    }

    public function create(): View
    {
        return view('/accounting/create');
    }

    public function store(AccountingStoreRequest $request): RedirectResponse
    {
        $user = $this->accountingCrud->store($request->all());
        return redirect(route('accounting.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->accountingCrud->show($id);
        return view('/accounting/show', compact('user'));
    }

    public function edit(int $id): View
    {
        $user = $this->accountingCrud->edit($id);
        return view('/accounting/edit', compact('user'));
    }

    public function update(AccountingStoreRequest $request, int $id): RedirectResponse
    {
        $user = $this->accountingCrud->update($request->all(), $id);
        return redirect(route('accounting.show', $user->id))->with("user", $user);
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = $this->accountingCrud->delete($id);
        return redirect(route('accounting.index'));
    }
}
