@extends('layouts.core') 
@section('page-title') Pugna | Register
@endsection
 
@section('body')
<div class="center-wrapper">
    <div class="centered-row">
        <div class="col-md-3">
            <h1 class="color--primary text--center">Pugna Admin</h1>
            <div class="box">
                <div class="box-header">
                    <h3>Register</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group label--floating">
                            <input type="text" name="name" value="{{ old('name') }}">
                            <label>Full name</label>
                        </div>
                        <div class="form-group label--floating">
                            <input type="email" name="email" value="{{ old('email') }}">
                            <label>Email</label>
                        </div>
                        <div class="form-group label--floating with-addon addon--right">
                            <span> <i class="fa fa-eye-slash"></i></span>
                            <input type="password" name="password">
                            <label>Password</label>
                        </div>
                        <div class="form-group label--floating with-addon addon--right">
                            <span> <i class="fa fa-eye-slash"></i></span>
                            <input type="password" name="password_confirmation">
                            <label>Password confirmation</label>
                        </div>
                        <div class="form-group">
                            <div class="form-checkbox">
                                <label>
                                        <div class="pgn-checkbox">
                                            <input type="checkbox" name="">
                                            <span></span>
                                        </div>
                                        <span>I agree the<a class="ml-1" href="#">terms and conditions</a></span>
                                    </label>
                            </div>
                        </div>

                        <button class="btn btn-md btn-primary btn-block mb-2">Register</button>
                    </form>
                </div>
            </div><span class="d-block mt-4 helper-text text--center">Cancel,<a class="ml-1" href="{{ route('login') }}">Log me in instead</a></span>
        </div>
    </div>
</div>
@endsection