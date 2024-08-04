<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Barang;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('supplier.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'nullable|exists:barang,id',
        ]);

        Supplier::create($request->all());

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier baru berhasil ditambahkan.');
    }

    public function show(Supplier $supplier)
    {
        return view('supplier.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        $barang = Barang::all();
        return view('supplier.edit', compact('supplier', 'barang'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'nullable|exists:barang,id',
        ]);

        $supplier->update($request->all());

        return redirect()->route('supplier.index')
            ->with('success', 'Data supplier berhasil diperbarui.');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil dihapus.');
    }
}
