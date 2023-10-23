<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['employees' => employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $employee = new employee();
        $employee->name = $request->name;
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->birthdate = $request->birthdate;
        $employee->save();
        return redirect()->route('form.index')->with('success', 'Employee has been added successfully!');
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
    public function edit(employee $form)
    {
        //dd($form);
        $employee = $form;
        return view('form', ['employee' => $form]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $form)
    {
        //dd($request->all());
        $employee = $form;
        $employee->name = $request->name;
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->birthdate = $request->birthdate;
        $employee->save();
        return redirect()->route('form.index')->with('success', 'Employee has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $form)
    {
        //dd($id);
        $employee = $form;
        $employee->delete();
        return redirect()->route('form.index')->with('success', 'Employee has been deleted successfully!');
       
    }
}
