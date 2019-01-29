@extends('layouts.core') 
@section('page-title') Pugna | Login
@endsection
 
@section('body')
<div class="center-wrapper">
    <div class="centered-row">
        <div class="col-md-3">
            <h1 class="color--primary text--center">Pugna Admin</h1>
            <div class="box">
                <div class="box-header">
                    <h3>Login</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group label--floating">
                            <input type="email" name="email" value="{{ old('email') }}" autofocus>
                            <label>Email</label>
                        </div>
                        <div class="form-group label--floating with-addon addon--right">
                            <span> <i class="fa fa-eye-slash"></i></span>
                            <input type="password" name="password"><label>Password</label>
                        </div>
                        <div class="form-group">
                            <div class="form-checkbox">
                                <label>
                                    <div class="pgn-checkbox">
                                        <input type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                        <span></span>
                                    </div>
                                    <span>Remember me</span>
                                    </label>
                            </div>
                        </div><button class="btn btn-md btn-primary btn-block">Login</button>
                    </form>

                    <hr class="data-hr--centered my-4" data-hr="atau login dengan">

                    <button class="btn btn-md btn-primary btn-block" style="background: #3C5A99;"> <i class="fa fa-facebook mr-2"></i><span>Facebook</span></button>
                    <button class="btn btn-md btn-primary btn-block my-2" style="background: #DB4437;"> <i class="fa fa-google mr-2"></i><span>Google</span></button>
                </div>
            </div>

            <span class="d-block mt-4 helper-text text--center">Don't have account yet ?<a class="ml-1" href="{{ route('register') }}">Register now</a></span>
        </div>
    </div>
</div>
@endsection