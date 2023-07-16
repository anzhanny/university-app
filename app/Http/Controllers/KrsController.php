<?php

namespace App\Http\Controllers;
use App\Models\Krs;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $plans = Krs::paginate(10);
       return view ('krs.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('krs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $cd_major = $request->input('cd_major');
        $nim = $request->input('nim');
        $data = new Krs();
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->cd_major =  $cd_major;
        $data->nim = $nim;
        $data->save();

        return redirect('/krs');
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
        $plans = Krs::find($id);
        return view ('krs.edit', compact('plans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $cd_major = $request->input('cd_major');
        $nim = $request->input('nim');
        $data = Krs::find($id);
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->cd_major =  $cd_major;
        $data->nim = $nim;
        $data->save();

        return redirect('/krs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $plans = Krs::find($id);
        $plans->delete();
        // return response()->json($faculties);
        return redirect('/krs');
    }
}
