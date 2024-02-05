@extends('layout')
@section('title','Login')
@section('content')
    <div class="container">
        <form class="ms-auto me-auto mt-3" style="width: 500px">
            <div class="mb-3">
              <label for="Email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="pass">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection