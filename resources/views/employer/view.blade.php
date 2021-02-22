@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="card">
        <div class="card-body">
            <button class="btn btn-success" onclick="window.location='{{ route('home') }}'">Home</button>
            <button class="btn btn-danger" onclick="window.location='{{ route('employees') }}'">Register Employee</button>
            <button class="btn btn-warning"onclick="window.location='{{ route('generate') }}'">Tracing</button>
        </div>
    </div>
</div>
</div>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>
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
                    @foreach($employees as $row)
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

                <!-- {$items->links() !!} -->
            </div>
        </div>
    </div>
</div>

@endsection