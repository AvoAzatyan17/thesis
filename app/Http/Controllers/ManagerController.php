<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ManagerStoreRequest;
use App\Services\Contracts\ManagerCrudInterface;
use App\Services\Contracts\UserCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ManagerController extends Controller
{
    private ManagerCrudInterface $managerCrud;
    private UserCrudInterface $userCrud;

    public function __construct(ManagerCrudInterface $managerCrud,UserCrudInterface $userCrud)
    {
        $this->managerCrud = $managerCrud;
        $this->userCrud = $userCrud;
    }

    public function index(): View
    {
        $users = $this->managerCrud->list();
        return view('/manager/list', compact('users'));
    }

    public function create(): View
    {
        $admins = $this->userCrud->list();
        return view('/manager/create',compact('admins'));
    }

    public function store(ManagerStoreRequest $request): RedirectResponse
    {
        $user = $this->managerCrud->store($request->all());
        return redirect(route('manager.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->managerCrud->show($id);
        return view('/manager/show', compact('user'));
    }

    public function edit(int $id): View
    {
        $user = $this->managerCrud->edit($id);
        $admins = $this->userCrud->list();
        return view('/manager/edit', compact('user','admins'));
    }

    public function update(ManagerStoreRequest $request, int $id): RedirectResponse
    {
        $user = $this->managerCrud->update($request->all(), $id);
        return redirect(route('manager.show', $user->id))->with("user", $user);
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = $this->managerCrud->delete($id);
        return redirect(route('manager.index'));
    }
}
