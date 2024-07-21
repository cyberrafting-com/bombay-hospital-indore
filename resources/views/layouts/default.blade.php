<!DOCTYPE html>
<html>

<head>
    <meta name="google-site-verification" content="SVeV1oSrY5CgIFroPqUcDj_E20gxMvlphVLYzFPY888" />
    @include('includes.head')
    <link rel="canonical" href="{{ url('https://www.bombayhospitalindore.com' . request()->getRequestUri()) }}">
    <title> {{ $title }} </title>
    <meta name="description" content="@yield('meta_desc')">

</head>

<body>
    <div id="page" class="page">
        @include('includes.header')
         @yield('content')
        @include('includes.footer')
    </div>
</body>

</html>
