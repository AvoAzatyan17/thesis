<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ManagerCrudInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\View;

class HomeController extends Controller
{
    private ManagerCrudInterface $managerCrud;
    public function __construct(ManagerCrudInterface $managerCrud)
    {
        $this->middleware('auth');
        $this->managerCrud = $managerCrud;
    }

    public function index(): Renderable
    {
        return view('home');
    }

    public function chat(): View
    {
        $users = $this->managerCrud->list();
        return view('chat', compact('users'));
    }
}
