<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    private $projeto;
    public function __construct(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.project.create');
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
            $request->image->move(public_path('upload/projetos'), $imageName);
            $this->projeto->name = $request->name;
            $this->projeto->tec = $request->tec;
            $this->projeto->desc = $request->desc;
            $this->projeto->image = $imageName;
            $this->projeto->url = $request->url;
            $this->projeto->save();
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
        $this->projeto->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
