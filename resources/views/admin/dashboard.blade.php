@extends('adminlte::page')
@section('title', 'PAINEL ADMINISTRATIVO')

@section('content_header')
                <div class="card-header"><h1>{{ __('Dashboard') }}</h1></div>

                
@endsection

@section('content')
<div class="card-body">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            @if (session('status'))
                <h5><i class="icon fas fa-check"></i> {{ session('status') }}</h5>
            @endif
            <i class="icon fas fa-check"></i> {{ __('You are logged in!') }}</h5>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection

@section('js')
    <script src="/js/scripts.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script
@endsection
