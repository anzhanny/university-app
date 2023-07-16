<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::paginate(10);
        return view ('faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
        $no = $request->input('no');
        $nm_fac = $request->input('nm_fac');
        $amount_lecturer = $request->input('amount_lecturer');
        $amount_student = $request->input('amount_student');
        $amount_major = $request->input('amount_major');
        $data = new Faculty();
        $data->no = $no;
        $data->nm_fac =  $nm_fac;
        $data->amount_lecturer =  $amount_lecturer;
        $data->amount_student = $amount_student;
        $data->amount_major = $amount_major;
        $data->save();

        // return view ('faculty.store', compact('request'));
        return redirect('/faculty');
    }

    
    // public function add(Request $request)
    // {
    //     DB::table('faculty')->insert([
    //         'no' => $request->no,
    //         'nm_fac' => $request->nm_fac,
    //         'amount_lecturer' => $request->amount_lecturer,
    //         'amount_student' => $request->amount_student,
    //         'amount_major' => $request->amount_major
    //     ]);

    //     return back();
    // }    

    public function edit( $id)
    {
        $faculties = Faculty::find($id);
        return view ('faculty.edit', compact('faculties'));
    }


    public function update(Request $request, $id)
    {
        $no = $request->input('no');
        $nm_fac = $request->input('nm_fac');
        $amount_lecturer = $request->input('amount_lecturer');
        $amount_student = $request->input('amount_student');
        $amount_major = $request->input('amount_major');
        $data = Faculty::find($id);
        $data->no = $no;
        $data->nm_fac =  $nm_fac;
        $data->amount_lecturer = $amount_lecturer;
        $data->amount_student = $amount_student;
        $data->amount_major = $amount_major;
        $data->save();

        return redirect('/faculty');

    }

    // public function delete($id)
    // {
    //     $isi = DB::table('faculty')->where('id',$id)->first();
    //     DB::table('faculty')->where('id',$id)->delete();

    //     return back();
        
    // }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                //delete sow
                $faculties = Faculty::find($id);
                $faculties->delete();

                // return response()->json($faculties);
                return redirect('/faculty');
        
    }
}
