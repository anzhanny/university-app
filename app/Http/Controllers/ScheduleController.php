<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $schedules = Schedule::paginate(10);
       return view ('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $cd_room = $request->input('cd_room');
        $nip = $request->input('nip');
        $time = $request->input('time');
        $data = new Schedule();
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->cd_room=  $cd_room;
        $data->nip = $nip;
        $data->time = $time;
        $data->save();

        return redirect('/schedule');

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
        $schedules = Schedule::find($id);
        return view ('schedule.edit', compact('schedules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $cd_subject = $request->input('cd_subject');
        $cd_room = $request->input('cd_room');
        $nip = $request->input('nip');
        $time = $request->input('time');
        $data = Schedule::find($id);
        $data->no = $no;
        $data->cd_subject =  $cd_subject;
        $data->cd_room=  $cd_room;
        $data->nip = $nip;
        $data->time = $time;
        $data->save();

        return redirect('/schedule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $schedules = Schedule::find($id);
        $schedules->delete();
        // return response()->json($faculties);
        return redirect('/schedule');
    }
}
