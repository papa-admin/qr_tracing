@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row justify-content-center">
       
        <form action="search" method="POST">
        @csrf
        <input class="text" placeholder="Input your unique code" name="code">
        <button type="submit">Search</button>
        </form>
    </div>

    <div class=container>
            @foreach($resc as $res)
                {{ $res->lname }},
                {{ $res->fname }}
                {{ $res->mname }} <br>
                {{ $res->num_h }}
                {{ $res->st }} Street,
                {{ $res->brgy }},
                {{ $res->city }} City <br>
                Phone Number: {{ $res->p_num }}<br>
                Email: {{ $res->email }}
    </div>
    <div class="row justify-content-center">
        {!! QrCode::size(250)
            ->generate('Hello, '.$res->fname.' !'."\n".'Your address is '.$res->st ); !!}
        {!! QrCode::size(250)
            ->format('png')
            ->generate('Hello, '.$res->fname.' !'."\n".'Your address is '.$res->st, public_path('images/qrcode.png')); !!}
    </div>
    
    @endforeach
</div>

@endsection