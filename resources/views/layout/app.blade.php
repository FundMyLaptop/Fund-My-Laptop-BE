<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FUND MY LAPTOP | T & C</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
    @include('includes.styles')

    @stack('styles')


</head>

<body>
@if(Auth::check()==True) {
@include('includes.auth-header')
@else
@include('includes.header')
@endIf

@include('includes.flash-msg')

@yield('content')

@include('includes.footer')

@include('includes.scripts')

@stack('scripts')


</body>

</html>
