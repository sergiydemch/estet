<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auth') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>
<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            @yield('left_column')
        </div>
        <div class="col-md-6">
            @yield('right_column')
        </div>
    </div>
    <hr/>
    <div class="row">
        @yield('under')
    </div>
</div>

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
