@extends('layouts.side')
@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Welcome back, {{ Auth::user()->name }}</h1>
</div>

<div class="container" id="home_crud">
    <div class="row justify-content-center">
        <div class="col-lg-8" id="home_crud_btns">
            <button type="button" id="btn_regis" onclick="window.location='{{ route("items") }}'">Add Client</button>
            <button type="button" id="btn_regis" onclick="window.location='{{ route("generate") }}'">Generate QR</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    Welcome back, {{ Auth::user()->name }}
                </div> -->
                <table class="table table-bordered" id="home_table">
                    <tr>
                        <th></th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($items as $row)
                    <tr>
                        <td>{!! QrCode::size(50)
                            ->generate('Hello, '.$row['lname'].' !'."\n".'Your address is '.$row['fname'] ); !!}</td>
                        <td>{{$row['lname']}}</td>
                        <td>{{$row['fname']}}</td>
                        <td>{{$row['mname']}}</td>
                        <td>
                        
                            <form action="{{ route("delete"), $row['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </table>

                {$items->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
