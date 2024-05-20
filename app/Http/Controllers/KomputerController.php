<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Komputer;
use App\Http\Requests\StoreKomputerRequest;
use App\Http\Requests\UpdateKomputerRequest;
use Illuminate\Http\RedirectResponse;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $komputer = Komputer::all();
        return view('komputer.index', compact('komputer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('komputer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKomputerRequest $request)
    {
        Komputer::create($request->validated());

        return redirect()->route('komputer.index')->with('success', 'Komputer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $komputer = Komputer::findOrFail($id);
        return view('komputer.show', compact('komputer'));
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Komputer $komputer)
    {
        return view('komputer.edit', compact('komputer'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomputerRequest $request, Komputer $komputer)
    {
        $komputer->update($request->validated());

        return redirect()->route('komputer.index')->with('success', 'Komputer Berhasil Diupdate!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $komputer = Komputer::findOrFail($id);
        $komputer->delete();

        return redirect()->route('komputer.index')->with(['success' => 'Komputer Berhasil Dihapus!']);
    }
}
