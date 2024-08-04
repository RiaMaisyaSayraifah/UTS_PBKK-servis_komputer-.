<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    public function index()
    {
        $komputers = Komputer::all();
        return view('komputer.index', compact('komputers'));
    }

    public function create()
    {
        return view('komputer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|in:asus,acer,dell,lenovo',
            'kelengkapan' => 'required|string',
        ]);

        Komputer::create($request->all());

        return redirect()->route('komputer.index')
            ->with('success', 'Komputer baru berhasil ditambahkan.');
    }

    public function show(Komputer $komputer)
    {
        return view('komputer.show', compact('komputer'));
    }

    public function edit(Komputer $komputer)
    {
        return view('komputer.edit', compact('komputer'));
    }

    public function update(Request $request, Komputer $komputer)
    {
        $request->validate([
            'merk' => 'required|in:asus,acer,dell,lenovo',
            'kelengkapan' => 'required|string',
        ]);

        $komputer->update($request->all());

        return redirect()->route('komputer.index')
            ->with('success', 'Data komputer berhasil diperbarui.');
    }

    public function destroy(Komputer $komputer)
    {
        $komputer->delete();

        return redirect()->route('komputer.index')
            ->with('success', 'Komputer berhasil dihapus.');
    }
}
