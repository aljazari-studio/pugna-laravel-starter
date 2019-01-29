@extends('layouts.admin-core') 
@section('admin-page-title') Pugna | Blank Page
@endsection
 
@section('admin-content')

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3>Dashboard</h3>
            </div>

            <div class="box-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <p>Selamat datang {{ Auth::user()->name}}</p>
            </div>
        </div>
    </div>
</div>
@endsection