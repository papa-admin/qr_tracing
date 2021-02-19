@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Item for QR') }}</div>
                    <div class="card-body">
                        <form action="/regis_item" method="POST" id="regis_item">
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
                                    <div class="col">
                                        <input type="text" placeholder="City" name="city" id="regis_field"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="container" id="regis_con">
                                <h5 id="regis_head">Contact Number</h5>
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Phone Number" name="p_num" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="Email" name="email" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                        <input type="text" placeholder="RFID" name="rfid" id="regis_field"><br>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                            <div class="container" id="regis_btns">
                            <div class="row justify-content-center"id="regis_btn">
                                <button type="submit" name="btn-regis" id="btn_regis">REGISTER</button><br>
                            </div>
                            <div class="row justify-content-center" id="regis_btn">
                                <button type="button" id="btn_regis" onclick="window.location='{{ route("home") }}'">Cancel</button>
                            </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection