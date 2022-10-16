@extends('layouts.app')
@section('title','Logins')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('login') }}">
                @csrf

                <h4>{{ session('message') }}</h4>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email" name="email">Email address</label>
                    <input type="email" id="email" class="form-control" name="email" />
                </div>
            
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password" name="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" />
                </div>
            
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex ">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label mx-3" for="form2Example31"> Remember me </label>
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                </div>
            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
            
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
            
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
            
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
