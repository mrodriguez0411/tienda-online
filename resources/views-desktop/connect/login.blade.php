<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>{{ __('lg.connect.login') }}-MIE Tienda de Mascotas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('static/css/connect.css')}}">
    <link rel="stylesheet" href="{{ url('static/css/mdalert.css')}}">

    <script type="text/javascript" src="{{ url('/static/js/app.js?v='.time()) }}" ></script>
    <script type="text/javascript" src="{{ url('/static/js/connect.js?v='.time()) }}" ></script>
</head>
<body>
    @include('components.loader_action')
    @include('components.mdalert')
    <!---->
<div class="wrapper">
    <div class="page">
        <div class="box shadow">
            <div class="logo">
                <img src="{{ url('static/images/logo.png')}}" alt="{{('cms.app_name')}}">
            </div>
            <h2 class="title">Ingresar a mi cuenta</h2>
            <div class="form mtop16">
                {!! Form::open(['url' => '/', 'id' => 'form_connect_login']) !!}
                <label for="email">{{__('lg.connect.email')}}:</label>
                <div class="group">
                    <i class="bi bi-envelope-open"></i>
                    {!! Form::email('email', null, ['class' => 'input']) !!}
                </div>
                <label for="password" class="mtop16">{{__('lg.connect.password')}}:</label>
                <div class="group">
                    <i class="bi bi-fingerprint"></i>
                    {!! Form::password('password', ['class' => 'input']) !!}
                </div>
                {!! Form::submit(__('lg.connect.connect'), ['class'=> 'btn mtop16']) !!}
                {!! Form::close() !!}
            </div>
            <p>© mr 2023. All rights reserved</p>
        </div>
    </div>
</div>
    <script type="text/javascript" src="{{ url('/static/js/mdalert.js') }}" ></script>
    
    
</body>
</html>