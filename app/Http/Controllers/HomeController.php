<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
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
        $projetos1 = Projeto::latest()->skip(0)->take(3)->get();
        $projetos2 = Projeto::latest()->skip(3)->take(3)->get();
        return view('home.pages.index', compact(['projetos1', 'projetos2']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contatos()
    {
        return view('home.pages.contatos.index');
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
    public function show(string $id)
    {
        //
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
