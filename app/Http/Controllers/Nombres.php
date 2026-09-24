<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nombre;

class Nombres extends Controller
{
    public function index()
    {
        $items = Nombre::all();
        return view('index', compact('items'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $item = new Nombre();
        $item->nombre = $request->nombre;
        $item->matricula = $request->matricula;
        $item->save();
        return redirect()->route('index');
    }

    public function show($id)
    {
        $item = Nombre::find($id);
        return view('show', compact('item'));
    }

    public function edit($id)
    {
        $item = Nombre::find($id);
        return view('edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Nombre::find($id);
        $item->nombre = $request->nombre;
        $item->matricula = $request->matricula;
        $item->save();
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $item = Nombre::find($id);
        $item->delete();
        return redirect()->route('index');
    }
}