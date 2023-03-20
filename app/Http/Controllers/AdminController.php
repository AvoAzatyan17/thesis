<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AdminStoreRequest;
use App\Services\Contracts\UserCrudInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    private UserCrudInterface $userCrud;

    public function __construct(UserCrudInterface $userCrud)
    {
        $this->userCrud = $userCrud;
    }

    public function index(): View
    {
        $users = $this->userCrud->list();
        return view('/user/list', compact('users'));
    }

    public function create(): View
    {
        return view('/user/create');
    }

    public function store(AdminStoreRequest $request): RedirectResponse
    {
        $user = $this->userCrud->store($request->all());
        return redirect(route('admin.show', $user->id))->with("user", $user);
    }

    public function show(int $id): View
    {
        $user = $this->userCrud->show($id);
        return view('/user/show', compact('user'));
    }

    public function edit(int $id): View
    {
        $user = $this->userCrud->edit($id);
        return view('/user/edit', compact('user'));
    }

    public function update(AdminStoreRequest $request, int $id): RedirectResponse
    {
        $user = $this->userCrud->update($request->all(), $id);
        return redirect(route('admin.show', $user->id))->with("user", $user);
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = $this->userCrud->delete($id);
        return redirect(route('admin.index'));
    }
}
