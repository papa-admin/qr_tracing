@extends('layouts.css')
<div class="container">
<div class="contain">
<h3><b>This is your Personal QR Code</b></h3>
    <br>
    <p>
        Never share to anyone nor post it to social media. Use it when required by the public/private establishments.<br>
        Take a picture or just save it by clicking the button below. 
    </p>
    <br>
    <div class="row justify-content-center">
        {!! QrCode::size(250)
            ->generate($id); !!}
        {!! QrCode::size(250)
            ->format('png')
            ->generate($id, public_path('images/individual/'.$id.'.png')); !!}
    </div>

    <div class="container">
        {{ $lname }}, {{ $fname }} {{ $mname }}
    </div>
    <br><br>
    <div>
            <a class="btn btn-info" href="images/individual/{{$id.'.png'}}" download>Save as Image</a>
            <a target="_blank" class="btn btn-danger" href="qrpdf/{{ $id }}">Save as PDF</a>
            <button class="btn btn-dark"onclick="window.location='{{ route("welcome") }}'">Back to Home Page</button>
    </div>
</div>
</div>