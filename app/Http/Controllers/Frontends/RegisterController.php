<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('frontends.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegisterRequest $request): RedirectResponse
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect()->route('login');

    }
}
