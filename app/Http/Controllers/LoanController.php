<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        $users = User::all();
        return view('loans.index', compact('loans', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.create', compact('cars', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|integer|exists:cars,id',
            'user_id' => 'required|integer|exists:users,id',
            'loan_date' => 'required|date',
            'return_date' => 'nullable|date',
            'total_cost' => 'nullable|integer',
            'status' => 'required|in:pending,approved,rejected,returned',
        ]);

        Loan::create($request->all());

        return redirect()->route('loans.index')->with('success', 'Loan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.edit', compact('loan', 'cars', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'car_id' => 'required|integer|exists:cars,id',
            'user_id' => 'required|integer|exists:users,id',
            'loan_date' => 'required|date',
            'return_date' => 'nullable|date',
            'total_cost' => 'nullable|integer',
            'status' => 'required|in:pending,approved,rejected,returned',
        ]);

        $loan->update($request->all());

        return redirect()->route('loans.index')->with('success', 'Loan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully.');
    }
}
