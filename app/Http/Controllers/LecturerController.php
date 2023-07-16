<?php

namespace App\Http\Controllers;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lectures = Lecturer::paginate(10);
        return view ('lecturer.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturer.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $nip = $request->input('nip');
        $name = $request->input('name');
        $address = $request->input('address');
        $religion = $request->input('religion');
        $date_year = $request->input('date_year');
        $gender = $request->input('gender');
        $tertiary_education = $request->input('tertiary_education');
        $data = new Lecturer();
        $data->no = $no;
        $data->nip = $nip;
        $data->name = $name;
        $data->address = $address;
        $data->religion = $religion;
        $data->date_year = $date_year;
        $data->gender = $gender;
        $data->tertiary_education = $tertiary_education;
        $data->save();

        return redirect('/lecturer');

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
        $lectures = lecturer::find($id);
        return view ('lecturer.edit', compact('lectures'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $nip = $request->input('nip');
        $name = $request->input('name');
        $address = $request->input('address');
        $religion = $request->input('religion');
        $date_year = $request->input('date_year');
        $gender = $request->input('gender');
        $tertiary_education = $request->input('tertiary_education');
        $data =  Lecturer::find($id);
        $data->no = $no;
        $data->nip = $nip;
        $data->name = $name;
        $data->address = $address;
        $data->religion = $religion;
        $data->date_year = $date_year;
        $data->gender = $gender;
        $data->tertiary_education = $tertiary_education;
        $data->save();

        return redirect('/lecturer');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $lectures = Lecturer::find($id);
        $lectures->delete();
        // return response()->json($faculties);
        return redirect('/lecturer');
    }
}
