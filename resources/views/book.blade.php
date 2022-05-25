@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/login.css">
<div class="wrapper">
    <h2>Make an appointment</h2>
    <form action="#">
      @csrf
      <div class="input-box">
        <p>Name</p>
        <input type="text" placeholder="Enter Patient Name" name="pname"  id="pname" required>
        @error('pname') <p class="error">{{$message}}</p> @enderror
      </div><br>

            
      <div class="input-box">
        <span class="details">Date</span>
        <input type="date" placeholder="Enter the date" name="date"  id="date" required>
        @error('date') <p class="error">{{$message}}</p> @enderror
      </div><br>

      <div class="input-box">
        <span class="details">Clinic</span>
        <select name="clinic" id="clinic"></select>
        @error('clinic') <p class="error">{{$message}}</p> @enderror
      </div>


      <div class="input-box">
        <p class="details">Message</p>
        <textarea name="message" id="message" cols="50" rows="5" placeholder="Enter your notes "></textarea><br>
        @error('message') <p class="error">{{$message}}</p> @enderror
      </div><br><br>
      <div>
        <br><br>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Submit">
      </div>
      
    </form>
  </div>
@endsection