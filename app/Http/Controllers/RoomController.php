<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::paginate(10);
        return view ('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no = $request->input('no');
        $cd_room = $request->input('cd_room');
        $nm_room = $request->input('nm_room');
        $status = $request->input('status');
        $data = new Room();
        $data->no = $no;
        $data->cd_room =  $cd_room;
        $data->nm_room =  $nm_room;
        $data->status = $status;
        $data->save();

        return redirect('/room');
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
        $rooms = Room::find($id);
        return view ('room.edit', compact('rooms'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $cd_room = $request->input('cd_room');
        $nm_room = $request->input('nm_room');
        $status = $request->input('status');
        $data = Room::find($id);
        $data->no = $no;
        $data->cd_room =  $cd_room;
        $data->nm_room =  $nm_room;
        $data->status = $status;
        $data->save();

        return redirect('/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///delete sow
        $rooms = Room::find($id);
        $rooms->delete();
        // return response()->json($faculties);
        return redirect('/room');
    }
}
