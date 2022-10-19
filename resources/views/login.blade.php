@extends('master')
@section("content")
<div class="container">
<h1>Contact Form</h1>

<form action="{{route('Sendemail')}}" method="POST">
    
@csrf

<div class="col-md-6">
@if(session()->has('message'))
        <div class="alert alert-success">
         {{ session()->get('message') }}
        </div>
     @endif
</div>
    

<div class="col-md-6">
    <div class="form-group mt-4">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="form-group mt-4">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="form-group mt-4">
        <textarea name="msg"  cols="30" rows="5" placeholder="Your Message" class="form-control" required>

        </textarea>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary mt-4">
</div>

</form>

</div>

@endsection
