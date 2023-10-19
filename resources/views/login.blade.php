@extends('layouts.auth')
@section('title','Login')
@section('content')

    <form class="col-md-4 border rounded pb-3" method="POST" action="{{route('custom-login')}}" id="loginform">
        @csrf
        @include('components.flash')

        <h3 class="text-center">Login</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <p>Create a new account? <a href="{{route('signup')}}">signup</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
@section('jscontent')
$('#loginform').validate({
    rules:{
        email:{
            required:true,
            email:true
        },
        password:{
            required:true,
            minlength:6,
        },
    },
    messages:{
        email:{
            required:"Please enter your email",
            email:"Please enter valid email"
        },
        password:{
            required:"Please enter password",
            minlength:"Please enter password greater than or equal to 6 characters",
        },
    },
    submitHandler: function(form) {
        form.submit();
    }
})
@endsection
