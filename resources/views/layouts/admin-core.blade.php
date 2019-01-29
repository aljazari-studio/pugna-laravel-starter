@extends('layouts.core') 
@section('page-title') @yield('admin-page-title')
@endsection
 
@section('body')
    @include('components.sidebar')

<div class="main-content">
    @include('components.header')
    <div class="content-wrapper">
    @include('components.chatbox')
        <div class="container-fluid">
            @yield('admin-content')
        </div>
        <div class="footer"><span><b>Pugna</b> - Admin Template by <a href="https://github.com/aljazari-studio/pugna" target="_blank">Al Jazari Studio</a></span></div>
    </div>
</div>
@endsection