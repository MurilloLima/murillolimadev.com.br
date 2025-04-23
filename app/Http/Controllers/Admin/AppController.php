<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aplicativo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    private $app;
    public function __construct(Aplicativo $app)
    {
        $this->app = $app;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Aplicativo::latest()->get();
        return view('admin.pages.app.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.app.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tec' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'url' => 'required'
        ]);


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/projetos/app'), $imageName);
            $this->app->name = $request->name;
            $this->app->tec = $request->tec;
            $this->app->desc = $request->desc;
            $this->app->image = $imageName;
            $this->app->url = $request->url;
            $this->app->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
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
    public function destroy(string $id)
    {
        $this->app->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
