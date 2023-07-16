<?php

namespace App\Http\Controllers;
use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academics = Academic::paginate(10);
        return view ('academic.index', compact('academics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('academic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $nim = $request->input('nim');
        $nm_student = $request->input('nm_student');
        $cd_subject = $request->input('cd_subject');
        $nm_subject = $request->input('nm_subject');
        $sks = $request->input('sks');
        $semester = $request->input('semester');
        $grade = $request->input('grade');
        $data = new Academic();
        $data->no = $no;
        $data->nim = $nim;
        $data->nm_student = $nm_student;
        $data->cd_subject = $cd_subject;
        $data->nm_subject = $nm_subject;
        $data->sks = $sks;
        $data->semester = $semester;
        $data->grade = $grade;
        $data->save();

        return redirect('/academic');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $academics = Academic::find($id);
        return view ('academic.edit', compact('academics'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $nim = $request->input('nim');
        $nm_student = $request->input('nm_student');
        $cd_subject = $request->input('cd_subject');
        $nm_subject = $request->input('nm_subject');
        $sks = $request->input('sks');
        $semester = $request->input('semester');
        $grade = $request->input('grade');
        $data = Academic::find($id);
        $data->nim = $nim;
        $data->nm_student =  $nm_student;
        $data->cd_subject =  $cd_subject;
        $data->nm_subject =  $nm_subject;
        $data->sks =  $sks;
        $data->semester =  $semester;
        $data->grade =  $grade;
        $data->save();

        return redirect('/academic');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $academics = Academic::findOrFail($id);
        $academics->delete();
        // return response()->json($faculties);
        return redirect('/academic');
    }
}
