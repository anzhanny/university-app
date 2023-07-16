<?php

namespace App\Http\Controllers;
use App\Models\Khs;
use Illuminate\Http\Request;


class KhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $results = Khs::paginate(10);
       return view ('khs.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('khs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $nim = $request->input('nim');
        $grade = $request->input('grade');
        $data = new Khs();
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->nim =  $nim;
        $data->grade = $grade;
        $data->save();

        return redirect('/khs');
    }

    // public function add(Request $request)
    // {
    //     DB::table('khs')->insert([
    //         'no' => $request->no,
    //         'cd_subject' => $request->cd_subject,
    //         'nim' => $request->nim,
    //         'grade' => $request->grade
    //     ]);

    //     return back();
    // }    

    public function edit( $id)
    {
        $results = Khs::find($id);
        return view ('khs.edit', compact('results'));
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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $nim = $request->input('nim');
        $grade = $request->input('grade');
        $data = Khs::find($id);
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->nim = $nim;
        $data->grade = $grade;
        $data->save();
        
        return redirect('/khs');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $results = Khs::find($id);
        $results->delete();
        // return response()->json($faculties);
        return redirect('/khs');
    }
}
