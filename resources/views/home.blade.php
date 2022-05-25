@extends('layout')
@section('content')
<div class="center">
    <div class="title">Welcome to our Website</div>
    <div class="sub_title">saving book online</div>
    <div class="btns">
      <button ><a href ="/login"> As patient </a></button>
      <button ><a href = "#"> As clinic </a></button>
    </div>
    @if($message = Session::get('message'))
      <div class="alert">
        {{ $message}}
      </div>
    @endif 
</div>
<!--Start footer-->
<div class="footer">
    &copy; 2022 <span>Pantomath </span> All Right Reserved
  </div>
  <!--End footer-->
@endsection