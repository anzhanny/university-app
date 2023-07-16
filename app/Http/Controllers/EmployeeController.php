<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view ('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nip = $request->input('nip');
        $name = $request->input('name');
        $role = $request->input('role');
        $data = new Employee();
        $data->nip = $nip;
        $data->name = $name;
        $data->role = $role;
        $data->save();

        return redirect('/employee');
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
    public function edit( $id)
    {
        $employees = Employee::find($id);
        return view ('employee.edit', compact('employees'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nip = $request->input('nip');
        $name = $request->input('name');
        $role = $request->input('role');
        $data = Employee::find($id);
        $data->nip = $nip;
        $data->name = $name;
        $data->role = $role;
        $data->save();

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $employees = Employee::find($id);
        $employees->delete();
        // return response()->json($faculties);
        return redirect('/employee');
    }
}
