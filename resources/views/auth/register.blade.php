@extends('layouts.app')
@section('title','Logins')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name </label>
                    <input type="text"  name="name" id="name" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email" >Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>
            
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password" >Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
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
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
            
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Already registered member? <a href="{{ route('login') }}">Login</a></p>
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
