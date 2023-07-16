<?php

namespace App\Http\Controllers;
use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costs = Cost::paginate(10);
        return view ('cost.index', compact('costs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm_major = $request->input('nm_major');
        $up3 = $request->input('up3');
        $sdp2 = $request->input('sdp2');
        $bpp = $request->input('bpp');
        $data = new Cost();
        $data->nm_major =  $nm_major;
        $data->up3 =  $up3;
        $data->sdp2 =  $sdp2;
        $data->bpp =  $bpp;
        $data->save();

        return redirect('/cost');

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
        $costs = Cost::find($id);
        return view ('cost.edit', compact('costs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nm_major = $request->input('nm_major');
        $up3 = $request->input('up3');
        $sdp2 = $request->input('sdp2');
        $bpp = $request->input('bpp');
        $data = Cost::find($id);
        $data->nm_major =  $nm_major;
        $data->up3 =  $up3;
        $data->sdp2 =  $sdp2;
        $data->bpp =  $bpp;
        $data->save();

        return redirect('/cost');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $costs = Cost::find($id);
        $costs->delete();
        // return response()->json($faculties);
        return redirect('/cost');
    }
}
