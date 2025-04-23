<?php

namespace App\Http\Controllers;

use App\Models\Aplicativo;
use App\Models\Projeto;
use App\Models\Website;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $app = Aplicativo::latest()->get();
        $website = Website::latest()->get();
        return view('home.pages.index', compact(['app', 'website']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aplicativo()
    {
        return view('home.pages.app.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sobre()
    {
        return view('home.pages.sobre.index');
    }

    /**
     * Display the specified resource.
     */
    public function contatos()
    {
        return view('home.pages.contatos.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    //fale comigo
    public function fale()
    {
        return view('home.pages.falecomigo.index');
    }

    //politica
    public function politica()
    {
        return view('home.pages.politica.index');
    }
}
