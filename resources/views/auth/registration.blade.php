@extends('auth.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 p-5 ">
            <div class="registration_box">

                <h2>Sign Up Form</h2>
                <hr>
                <form  action="{{route("register.store")}}" method="POST">
                    @csrf
                <div class="mb-3">
               
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" name="name" placeholder="Enter you name here">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  
                </div>
                  <div class="mb-3"> 
                  <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" aria-describedby="email"  name="email" placeholder="Enter you email here">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3">
                
                  <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter you password here">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mb-3">
                 
                    <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Enter you confirm password here">
                  </div>
                <button type="submit" class="btn btn-success">Sign Up</button>
              </form>
            </div>
  
        </div>
    </div>
 </div>
@endsection