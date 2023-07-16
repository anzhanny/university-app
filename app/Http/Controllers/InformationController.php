<?php

namespace App\Http\Controllers;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::paginate(10);
        return view ('information.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $description = $request->input('description');
        $data = new Information();
        $data->name = $name;
        $data->title =  $title;
        $data->description =  $description;
        $data->save();

        return redirect('/information');

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
        $informations = Information::find($id);
        return view ('information.edit', compact('informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $description = $request->input('description');
        $data = Information::find($id);
        $data->name = $name;
        $data->title =  $title;
        $data->description =  $description;
        $data->save();

        return redirect('/information');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $informations = Information::find($id);
        $informations->delete();
        // return response()->json($faculties);
        return redirect('/information');
    }
}
