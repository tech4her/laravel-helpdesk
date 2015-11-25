@extends('master')        
@section('title', 'Register')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="POST" action="{{ url('/users/register') }}">
                
                @include('shared.notification')

                <fieldset>
                    <legend>Register</legend>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="col-lg-2 control-label">Confirm Password</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection