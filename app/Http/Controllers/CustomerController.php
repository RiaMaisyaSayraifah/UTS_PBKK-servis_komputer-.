<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomersRequest $request)
    {
        Customers::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $customer = Customers::findOrFail($id);
        return view('customers.show', compact('customer'));
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Customers $customer)
    {
        return view('customers.edit', compact('customer'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomersRequest $request, Customers $customer)
    {
        $customer->update($request->validated());

        return redirect()->route('customers.index')->with('success', 'Customer Berhasil Diupdate!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $customers = Customers::findOrFail($id);
        $customers->delete();

        return redirect()->route('customers.index')->with(['success' => 'Customer Berhasil Dihapus!']);
    }
}