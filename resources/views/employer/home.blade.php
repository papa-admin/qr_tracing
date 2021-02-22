@extends('layouts.app')
@section('content')

<div class="container">
    <h4>Welcome back, {{ Auth::user()->name }}</h4>
</div>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Action</div>
                    <div class="card-body" id="card_some">
                        <div class="container" id="regis_btns">
                        <div class="row justify-content-center"id="regis_btn">
                            <button type="button" id="btn_regis" onclick="window.location='{{ route("employees") }}'">Register Employee</button>
                        </div>
                        </div>
                        <div class="container" id="regis_btns">
                        <div class="row justify-content-center"id="regis_btn">
                            <button type="button" id="btn_regis" onclick="window.location='{{ route("view") }}'">View Employees</button>
                        </div>
                        </div>
                        <div class="container" id="regis_btns">
                        <div class="row justify-content-center"id="regis_btn">
                            <button type="button" id="btn_regis" onclick="window.location='{{ route("generate") }}'">RFID Scan</button>
                        </div>
                        </div>
                        <div class="container" id="regis_btns">
                        <div class="row justify-content-center"id="regis_btn">
                            <button type="button" id="btn_regis" onclick="window.location='{{ route("generate") }}'">Tracing</button>
                        </div>
                        </div>
                    </div>
            </div>    
        </div>    
    </div>    
</div>    

@endsection
