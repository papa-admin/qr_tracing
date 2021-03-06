<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $res_c = Employee::where('id', $request['code'])->orwhere('uniq_id', $request['code'])->get();
        $data = [
            "resc" => $res_c
        ];

        return view('rfid.generate')->with($data);
    }

    public function search(Request $request)
    {
        $res_c = Employee::where('id', $request['code'])->orwhere('uniq_id', $request['code'])->get();
        $res_cse = Employee::where('id', $request['code'])->orwhere('uniq_id', $request['code'])->first();
        $logs = Log::where('id_no', $request['code'])->get();
        $data = [
            "resc" => $res_c
        ];

        Log::create([
            'id_no' => $res_cse->uniq_id,
            'time_log' => Carbon::now()->toTimeString(),
            'date_log' => Carbon::now()->toDateString(),
        ]);

        return view('rfid.generate')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generate  $generate
     * @return \Illuminate\Http\Response
     */
    public function show(Generate $generate)
    {
        
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Generate  $generate
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Generate $generate)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Generate  $generate
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Generate $generate)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Generate  $generate
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Generate $generate)
    // {
    //     //
    // }
}
