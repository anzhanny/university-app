<?php

namespace App\Http\Controllers;
use App\Models\Detailsubject;
use Illuminate\Http\Request;

class DetailsubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailsubjects = Detailsubject::paginate(10);
        return view ('detailsubject.index', compact('detailsubjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detailsubject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject_id = $request->input('subject_id');
        $lecturer_id = $request->input('lecturer_id');
        $class_year = $request->input('class_year');
        $data = new Detailsubject();
        $data->subject_id = $subject_id;
        $data->lecturer_id = $lecturer_id;
        $data->class_year = $class_year;
        $data->save();

        return redirect('/detailsubject');
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
        $detailsubjects = Detailsubject::find($id);
        return view ('detailsubject.edit', compact('detailsubjects'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subject_id = $request->input('subject_id');
        $lecturer_id = $request->input('lecturer_id');
        $class_year = $request->input('class_year');
        $data = Detailsubject::find($id);
        $data->subject_id = $subject_id;
        $data->lecturer_id = $lecturer_id;
        $data->class_year = $class_year;
        $data->save();

        return redirect('/detailsubject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $detailsubjects = Detailsubject::find($id);
        $detailsubjects->delete();
        // return response()->json($faculties);
        return redirect('/detailsubject');
    }
}
