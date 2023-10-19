@extends('layouts.auth')
@section('title','Signup')
@section('content')

    <form class="col-md-4 border rounded pb-3" action="{{route('custom-signup')}}" method="POST" id="signupform">
        @csrf
        @include('components.flash')
        <h3 class="text-center">Sign Up</h3>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <p>Already have an account? <a href="{{route('login')}}">login</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@section('jscontent')

$('#signupform').validate({
    rules:{
        name:{
            required:true
        },
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
        name:"Please enter your name",
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
