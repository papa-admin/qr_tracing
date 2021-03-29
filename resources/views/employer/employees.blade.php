@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Employee Form') }}</div>
                    <div class="card-body">
                        <div>
                                {{-- put upload image here --}}
                        </div>
                        <form action="/regis_employee" method="POST" id="regis_item">
                            @csrf
                            <div class="container" id="regis_con_name">
                                <h5 id="regis_head">Full Name</h5>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Lastname" name="lname" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Firstname" name="fname" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Middlename" name="mname" id="regis_field"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container" id="regis_con">
                                <h5 id="regis_head">Full Address</h5>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Building No." name="num_h" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Street" name="st" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Barangay" name="brgy" id="regis_field"><br>
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" placeholder="City" name="city" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                            <div class="container" id="regis_con">
                                <h5 id="regis_head">Contact Number</h5>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Phone Number" name="p_num" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Email" name="email" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="RFID" name="rfid" id="regis_field"><br>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="container" id="regis_btns">
                            <div class="row justify-content-center"id="regis_btn">
                                <button type="submit" name="btn-regis" class="btn btn-success" id="btn_regis_form" >REGISTER</button><br>
                            </div>
                            <div class="row justify-content-center"id="regis_btn">
                                <button type="reset" name="btn-regis" class="btn btn-danger" id="btn_regis_form" value="Reset">Clear Fields</button><br>
                            </div>
                            <div class="row justify-content-center" id="regis_btn">
                                <button type="button" class="btn btn-primary" id="btn_return_form" onclick="window.location='{{ route("home") }}'">Back to Home</button>
                            </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection