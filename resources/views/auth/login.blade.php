@extends('auth.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="registration_box">
                <form >
             
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email"  name="email">
                    
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
          
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="remember_me">remember</label>
                  </div>
                  <button type="submit" class="btn btn-success">Login</button>
                </form>
              
  
              </div>
        </div>
    </div>
</div>
@endsection
