<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $website;
    public function __construct(Website $website)
    {
        $this->website = $website;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Website::latest()->get();
        return view('admin.pages.web.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.web.create');
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
            $this->website->name = $request->name;
            $this->website->tec = $request->tec;
            $this->website->desc = $request->desc;
            $this->website->image = $imageName;
            $this->website->url = $request->url;
            $this->website->save();
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
        $this->website->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
