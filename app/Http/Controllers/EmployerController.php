<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all();

        return view('employers.index', compact('employers'));
    }

    public function create()
    {
        return view('employers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employers',
          //  'password' => 'required',
            // Add validation rules for other fields
        ]);

        Employer::create($validatedData);

        return redirect()->route('employers.index')->with('success', 'Employer created successfully.');
    }

    public function edit(Employer $employer)
    {
        return view('employers.edit', compact('employer'));
    }

    public function update(Request $request, Employer $employer)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employers,email,' . $employer->id,
            // Add validation rules for other fields
        ]);

        $employer->update($validatedData);

        return redirect()->route('employers.index')->with('success', 'Employer updated successfully.');
    }

    public function destroy(Employer $employer)
    {
        $employer->delete();

        return redirect()->route('employers.index')->with('success', 'Employer deleted successfully.');
    }

}
