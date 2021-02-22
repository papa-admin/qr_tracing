<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('employer.home', compact('employees'));
    }

    public function show(Employee $employees)
    {
        return view('employer.home',compact('employees'));
    } 

    public function delete(Request $request)    
    {
    }
}
