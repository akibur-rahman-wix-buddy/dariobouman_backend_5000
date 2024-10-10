{{-- <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""> --}}
<link href="{{ asset('assets/css/font/Nunito+Sans.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/unicons.iconscout/line.css') }}">
<link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
<link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
<link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
<link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">


@stack('style')

@stack('headScript')