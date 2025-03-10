@extends('layout')
@section('title', 'Login')
@include('navbar')

@section('content')
    <div class="container">
        <h1 class="dashboard">Đashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 1</div>
                    <div class="card-body">
                        Content for section 1.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 2</div>
                    <div class="card-body">
                        Content for section 2.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 3</div>
                    <div class="card-body">
                        Content for section 3.
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
