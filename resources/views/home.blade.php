@extends('layouts.app')

@section('content')
<div class="container">
        <div class="container">
            <h1>Dashboard</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            {{--  <p class="card-text">{{ $users }}</p>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            {{--  <p class="card-text">{{ $orders }}</p>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Revenue</h5>
                            {{--  <p class="card-text">${{ $revenue }}</p>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>

</div>
@endsection
