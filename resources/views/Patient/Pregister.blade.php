@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/register.css">
<div class="container">
    <div class="content">
      <div class="title" >Registration</div>
      <form action="#">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="pname"  id="pname" required>
            @error('pname') <p class="error">{{$message}}</p> @enderror
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="pusername"  id="pusername" required>
            @error('pusername') <p class="error">{{$message}}</p> @enderror
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="pemail"  id="pemail" required>
            @error('pemail') <p class="error">{{$message}}</p> @enderror
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="pphone"  id="pphone" required>
            @error('pphone') <p class="error">{{$message}}</p> @enderror
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="pasaword"  id="password" required>
            @error('password') <p class="error">{{$message}}</p> @enderror
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="password_confrimation"  id="password_confrimation" required>
            @error('password_confrimation') <p class="error">{{$message}}</p> @enderror
          </div>

          @if($error = Session::get('error'))
            <div class="error">
              {{ $error}}
            </div>
          @endif 
          
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <h3>Already have an account? <a href="#">Login</a></h3>
        
      </form>
    </div>
  </div>
  @endsection
