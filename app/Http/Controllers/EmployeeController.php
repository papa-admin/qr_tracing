<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $employee = new Employee;
        $employee->lname = $request->lname;
        $employee->fname = $request->fname;
        $employee->mname = $request->mname;
        //return view("item");
        return view('employer.employees',['lname' => $employee->lname, 'fname' => $employee->fname, 'st' => $employee->st]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $employee = new Employee;   
        $employee->uniq_id = uniqid('emp_');
        $employee->lname = $request->lname;
        $employee->fname = $request->fname;
        $employee->mname = $request->mname;
        $employee->num_h = $request->num_h;
        $employee->st = $request->st;
        $employee->brgy = $request->brgy;
        $employee->city = $request->city;
        $employee->p_num = $request->p_num;
        $employee->email = $request->email;
        $employee->rfid = $request->rfid;
        $employee->save();
       
        return view('employer.employees',['lname' => $employee->lname, 'fname' => $employee->fname, 'st' => $employee->st]);
    
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

        $employee = new Employee;
        $employee->create($request->all());
        return view('employer.employees');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'num_h' => ['required', 'string', 'max:255'],
            'st' => ['required', 'string', 'max:255'],
            'brgy' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'p_num' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'rfid' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
