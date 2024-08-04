<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Komputer;
use App\Models\Customer;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::with(['komputer', 'customer', 'pegawai'])->get();
        return view('keluhan.index', compact('keluhans'));
    }

    public function create()
    {
        $komputers = Komputer::all();
        $customers = Customer::all();
        $pegawais = Pegawai::all();
        return view('keluhan.create', compact('komputers', 'customers', 'pegawais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'id_komputer' => 'nullable|exists:komputer,id',
            'id_customer' => 'nullable|exists:customer,id',
            'id_pegawai' => 'nullable|exists:pegawai,id',
        ]);

        Keluhan::create($request->all());

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan baru berhasil ditambahkan.');
    }

    public function show(Keluhan $keluhan)
    {
        $keluhan->load(['komputer', 'customer', 'pegawai']);
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        $komputers = Komputer::all();
        $customers = Customer::all();
        $pegawais = Pegawai::all();
        return view('keluhan.edit', compact('keluhan', 'komputers', 'customers', 'pegawais'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'id_komputer' => 'nullable|exists:komputer,id',
            'id_customer' => 'nullable|exists:customer,id',
            'id_pegawai' => 'nullable|exists:pegawai,id',
        ]);

        $keluhan->update($request->all());

        return redirect()->route('keluhan.index')
            ->with('success', 'Data keluhan berhasil diperbarui.');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil dihapus.');
    }
}
