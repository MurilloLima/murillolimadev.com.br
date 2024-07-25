<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Congresso;
use App\Models\Noticia;
use App\Models\Projeto;
use App\Models\Reunioe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function cadastro()
    {
        return view('home.pages.cadastro');
    }


    public function noticias()
    {
        return view('home.pages.noticias');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function download(Request $request)
    {
        $file_path = public_path('home/SINSEMEM.apk');
        return response()->download($file_path);
    }

    /**
     * Display the specified resource.
     */
    public function politica()
    {
        return view('home.pages.politica.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function view($slug)
    {
        $data = Noticia::where('slug', $slug)->first();
        return view('home.pages.noticias.view', compact('data'));
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
    public function authenticate(Request $request)
    {
        $password = bcrypt($request->input('password'));
        $login    = $request->input('cpf'); // Email ou username

        if (Auth::attempt(['cpf' => $login, 'password' => $password]) || Auth::attempt(['username' => $login, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}
