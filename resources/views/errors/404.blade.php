@extends('layouts.core') 
@section('page-title') Pugna | Error Page
@endsection
 
@section('body')
<div class="center-wrapper">
  <div class="centered-column">
    <div class="error-wrapper">
      <h1 class="color--c-danger" data-shadow="Ooops!">Ooops!</h1>
      <p>We can't find a page you are looking for, <a class="ml-1" href="{{ route('home') }}">let's go back</a></p><span>Error code : 404</span>
    </div>
  </div>
</div>
@endsection