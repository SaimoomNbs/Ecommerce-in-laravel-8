@extends('frontend.layouts.master')

@section('title','Confirm page')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4 " style="max-height: 350 px;">
    <div class="card-body text-center">
      <div class="border border-success p-5 m-5 bg-light rounded text-success">
        <h3>
          Thank you for making a purchase from our website! <br> 
          Your order is still pending so kindly download our mobile app and confirm your order. We look forward to seeing you again.
        </h3>
      </div>
      <a href="{{route('home')}}">
        <button class="btn btn-success">Confirm your order</button>
      </a>
    </div>
</div>
@endsection
