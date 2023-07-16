<?php

namespace App\Http\Controllers;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majores = Major::paginate(10);
        return view ('major.index', compact('majores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $no = $request->input('no');
        $cd_major = $request->input('cd_major');
        $nm_major = $request->input('nm_major');
        $data = new Major();
        $data->no = $no;
        $data->cd_major =  $cd_major;
        $data->nm_major =  $nm_major;
        $data->save();

        return redirect('/major');

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
        $majores = Major::find($id);
        return view ('major.edit', compact('majores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $cd_major = $request->input('cd_major');
        $nm_major = $request->input('nm_major');
        $data = Major::find($id);
        $data->no = $no;
        $data->cd_major =  $cd_major;
        $data->nm_major =  $nm_major;
        $data->save();

        return redirect('/major');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $majores = Major::find($id);
        $majores->delete();
        // return response()->json($faculties);
        return redirect('/major');
    }
}
