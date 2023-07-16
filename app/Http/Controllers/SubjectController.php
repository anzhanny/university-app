<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::paginate(10);
        return view ('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $nm_subject = $request->input('nm_subject');
        $sks = $request->input('sks');
        $semester = $request->input('semester');
        $data = new Subject();
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->nm_subject =  $nm_subject;
        $data->sks =  $sks;
        $data->semester =  $semester;
        $data->save();

        return redirect('/subject');

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
        $subjects = Subject::find($id);
        return view ('subject.edit', compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $nm_subject = $request->input('nm_subject');
        $sks = $request->input('sks');
        $semester = $request->input('semester');
        $data = Subject::find($id);
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->nm_subject =  $nm_subject;
        $data->sks =  $sks;
        $data->semester =  $semester;
        $data->save();

        return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $subjects = Subject::find($id);
        $subjects->delete();
        // return response()->json($faculties);
        return redirect('/subject');
    }
}
