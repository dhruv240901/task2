@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.flash')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <div class=" float-right mr-2 hidden-sm-down">
                <button class="btn btn-secondary datetime" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" style="cursor: default;" disabled></button>
            </div>
        </div>
    </div>
    @auth
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;  height:152px">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{asset('assets/images/users/profile-icon.svg')}}" alt="user" style="height: 100%;width: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body" >
                        <h5 class="card-title">{{auth()->user()->name}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
    @guest

        <div style="text-align: center;margin-top: 10%;font-family: 'Vesper Libre', serif;
        font-family: 'Young Serif', serif;">
            <h1 class="display-1">Welcome to Our</h1></br>
            <h1 class="display-1">Website</h1>
        </div>

    @endguest
</div>
@endsection
