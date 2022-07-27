@extends('layouts.user-dash-layout')
@section('title', 'Make Deposit')
@section('content')
<section class="content">
    @if(session()->has('error')) {{session()->get('error')}} @endif
    <h1>Start Payment</h1>

  
    <form action="{{route('pay')}}" method="POST">
        @csrf 
        <input type="text" class="form-control" name="email" placeholder="Email Address" required value= "{{ old('email') ?? Auth::user()->email}}"> <br><br>
        
        <input type="number" class="form-control" name="amount" placeholder="Enter amount" required> <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection


