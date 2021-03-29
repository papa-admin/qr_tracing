@extends('layouts.app')
@section('content')

<div class="container" id="s_container">
    <div id="s_box">
        <table class="s_table"> 
            <tr>
                <form action="search" method="POST">
                    @csrf
                    <td>
                        <input class="text" placeholder="Input your unique code" name="code" autocomplete="off" autofocus id="s_field">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger" id="s_search">Search</button>
                    </td>
                </form>
                <td>
                    <button class="btn btn-primary" onclick="window.location='{{ route("home") }}'" id="s_bh">Back to Home</button>
                </td>
            </tr>
        </table>
    </div>
    
    <br><br>
    @foreach($resc as $res)
    <div class="s_result">
        <div class="row justify-content-center" id="s_img">
            {!! QrCode::size(250)
                ->generate($res->uniq_id); !!}
            {!! QrCode::size(250)
                ->format('png')
                ->generate('Hello, '.$res->fname.' !'."\n".'Your address is '.$res->st, public_path('images/qrcode.png')); !!}
        </div>
    
        <div>
            <h1><b>{{ $res->lname }}, {{ $res->fname }} {{ $res->mname }}</b></h1> <br>
            {{ $res->num_h }}
            {{ $res->st }} Street,
            {{ $res->brgy }},
            {{ $res->city }} City <br>
            Phone Number: {{ $res->p_num }}<br>
            Email: {{ $res->email }}
        </div>
    </div>
    @endforeach

</div>

@endsection