<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/monster-admin/minimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 07:18:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Panel</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <!-- Bootstrap Core CSS -->
   @include('includes.css')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
            @include('components.header')
            @auth
            @include('components.sidebar')
            @endauth
        <div class="page-wrapper @guest ml-0 @endguest">
           @yield('content')
        </div>
    </div>
   @include('includes.js')
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/monster-admin/minimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 07:19:21 GMT -->
</html>
