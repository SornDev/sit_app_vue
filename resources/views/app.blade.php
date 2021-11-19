<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>{{env('APP_NAME')}}</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Icons -->
  <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/font_lao.css" rel="stylesheet">
       <!--  <link type="text/css" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet"> -->
        
        
</head>
<body>

@if (Auth::check())
    @php
    $user_auth_data = [
        'isLoggedin' => true,
        'user' =>  Auth::user()
    ];
    @endphp
@else
    @php
    $user_auth_data = [
        'isLoggedin' => false
    ];
    @endphp
@endif
<script>
    window.Laravel = JSON.parse(atob('{{ base64_encode(json_encode($user_auth_data)) }}'));
</script>

<div id="app"></div>

<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js" ></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js" ></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js" ></script>
<script src="{{ asset('argon') }}/js/argon.min.js" ></script>
<!-- <script src="http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script> -->
<script src="{{ asset('argon') }}/js/datatable.js" ></script>

</body>
</html>