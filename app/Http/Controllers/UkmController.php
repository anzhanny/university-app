<?php

namespace App\Http\Controllers;
use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Ukm::paginate(10);
        return view ('ukm.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $nm_ukm = $request->input('nm_ukm');
        $activity_date = $request->input('activity_date');
        $activity_place = $request->input('activity_place');
        $data = new Ukm();
        $data->no = $no;
        $data->nm_ukm =  $nm_ukm;
        $data->activity_date =  $activity_date;
        $data->activity_place =  $activity_place;
        $data->save();

        return redirect('/ukm');

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
        $activities = Ukm::find($id);
        return view ('ukm.edit', compact('activities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $no = $request->input('no');
        $nm_ukm = $request->input('nm_ukm');
        $activity_date = $request->input('activity_date');
        $activity_place = $request->input('activity_place');
        $data = Ukm::find($id);
        $data->no = $no;
        $data->nm_ukm =  $nm_ukm;
        $data->activity_date =  $activity_date;
        $data->activity_place =  $activity_place;
        $data->save();

        return redirect('/ukm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $activities = Ukm::find($id);
        $activities->delete();
        // return response()->json($faculties);
        return redirect('/ukm');
    }
}
