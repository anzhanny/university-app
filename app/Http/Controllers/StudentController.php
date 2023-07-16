<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students = Student::paginate(10);
       return view ('student.index', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $nim = $request->input('nim');
        $name = $request->input('name');
        $address = $request->input('address');
        $religion = $request->input('religion');
        $date_year = $request->input('date_year');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $data = new Student();
        $data->no = $no;
        $data->nim = $nim;
        $data->name = $name;
        $data->address = $address;
        $data->religion = $religion;
        $data->date_year = $date_year;
        $data->gender = $gender;
        $data->email = $email;
        $data->save();

        return redirect('/student');

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
        $students = Student::find($id);
        return view ('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $nim = $request->input('nim');
        $name = $request->input('name');
        $address = $request->input('address');
        $religion = $request->input('religion');
        $date_year = $request->input('date_year');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $data = Student::find($id);
        $data->no = $no;
        $data->nim = $nim;
        $data->name = $name;
        $data->address = $address;
        $data->religion = $religion;
        $data->date_year = $date_year;
        $data->gender = $gender;
        $data->email = $email;
        $data->save();

        return redirect('/student');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $students = Student::find($id);
        $students->delete();
        // return response()->json($faculties);
        return redirect('/student');
    }
}
