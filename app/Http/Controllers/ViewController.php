<?php

namespace App\Http\Controllers;
use App\Models\Employee;
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
    }

    public function show(Employee $employees)
    {
        return view('employer.view',compact('employees'));
    } 

    public function delete(Employee $employees)
    {
        dd($request);
        $employees->delete();

        return redirect()->route("employer.view")
                        ->with('Success','Product deleted successfully');
    }
}
