<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Individual;
use App\Models\Log;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = Employee::all();
        //dd($items);
        return view('employer.view', compact('employees'));

            // $logs = DB::table('$employees')
            // ->join('logs', 'employees.uniq_id','=','logs.id_no')
            // // ->join('employess', 'logs.id_no','=','employees.uniq_id')
            // ->get();

            // return view('employer.view',compact('logs'));
    }

    public function view()
    {
        $indiv = Individual::all();
        //dd($items);
        return view('employer.indiview', compact('indiv'));
    }

    public function show(Employee $employees)
    {
        return view('employer.view',compact('employees'));
    } 

    public function delete(Employee $employees)
    {
        $employees->delete();

        return redirect()->route("employer.view")
                        ->with('Success','Product deleted successfully');
    }
}
