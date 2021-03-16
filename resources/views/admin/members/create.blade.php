@extends('adminlte::page')

@section('title', 'ADICIONAR NOVO MEMBRO')

@section('content_header')


<div class="card card-info">
    <div class="card-header">
        <h1 class="card-title">Adicionar novo membro</h1>
    </div>

    <!-- /.card-header -->

    @endsection

    @section('content')

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Ocorreu um Erro!</h5>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('members.store') }}" method="post" class="form-horizontal">
        @csrf

        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control col-sm-6 {{ $errors->has('name') ? 'is-invalid' : '' }}"
                value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-user"></span>
                </div>
            </div>
            @if($errors->has('name'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
            @endif

            {{-- Email field --}}
            <input type="email" name="email"
                class="form-control col-sm-6 {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                placeholder="{{ __('adminlte::adminlte.email') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-envelope"></span>
                </div>
            </div>
            @if($errors->has('email'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
            @endif
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password"
                class="form-control col-sm-6 {{ $errors->has('password') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.password') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-lock"></span>
                </div>
            </div>
            @if($errors->has('password'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
            @endif

            {{-- Confirm password field --}}
            <input type="password" name="password_confirmation"
                class="form-control col-sm-6 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.retype_password') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-lock"></span>
                </div>
            </div>
            @if($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </div>
            @endif
        </div>

        {{-- Whatsapp field --}}
        <div class="input-group mb-3">
            <input type="tel" name="whatsapp" maxlength="12"
                class="form-control col-sm-6 {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}"
                placeholder="{{ __('WhatsApp N°: 11912345678') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fab fa-whatsapp"></span>
                </div>
            </div>
            @if($errors->has('whatsapp'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('whatsapp') }}</strong>
            </div>
            @endif

            {{-- Nickname field --}}
            <input type="text" name="nickname"
                class="form-control col-sm-6 {{ $errors->has('nickname') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.nickname') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-gamepad"></span>
                </div>
            </div>
            @if($errors->has('nickname'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('nickname') }}</strong>
            </div>
            @endif
        </div>


        <div class="input-group mb-3">

            {{-- Level Field --}}
            <input type="text" name="level" maxlength="2"
                class="form-control col-sm-5 {{ $errors->has('level') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.level') }}" style="margin-left: 5px;">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-level-up-alt"></span>
                </div>
            </div>
            @if($errors->has('level'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('level') }}</strong>
            </div>
            @endif

            {{-- Beasts Field --}}
            <input type="text" name="beasts"
                class="form-control col-sm-7 {{ $errors->has('beasts') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.beasts') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-dragon"></span>
                </div>
            </div>
            @if($errors->has('beasts'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('beasts') }}</strong>
            </div>
            @endif
        </div>

        {{-- Giants Field --}}
        <div class="input-group mb-3">
            <select class="form-control col-sm-6 {{ $errors->has('giant') ? 'is-invalid' : '' }}" name="giant">

                <option value="" disabled selected>Gigante</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="b3">B3</option>
                <option value="b4">B4</option>
                <option value="b5">B5</option>
                <option value="b6">B6</option>
                <option value="b7">B7</option>
                <option value="b8">B8</option>
                <option value="b9">B9</option>
                <option value="b10">B10</option>
                <option value="b11">B11</option>
                <option value="b12">B12</option>

            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-snowman"></span>
                </div>
            </div>
            @if($errors->has('giant'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('giant') }}</strong>
            </div>
            @endif

            {{-- Dragon Field --}}
            <select class="form-control col-sm-6 {{ $errors->has('dragon') ? 'is-invalid' : '' }}" name="dragon"
                style="margin-left: 5px">

                <option value="" disabled selected>Dragão</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="b3">B3</option>
                <option value="b4">B4</option>
                <option value="b5">B5</option>
                <option value="b6">B6</option>
                <option value="b7">B7</option>
                <option value="b8">B8</option>
                <option value="b9">B9</option>
                <option value="b10">B10</option>
                <option value="b11">B11</option>
                <option value="b12">B12</option>

            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-dragon"></span>
                </div>
            </div>
            @if($errors->has('dragon'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('dragon') }}</strong>
            </div>
            @endif
        </div>

        {{-- Necro Field --}}
        <div class="input-group mb-3">
            <select class="form-control col-sm-6 {{ $errors->has('necro') ? 'is-invalid' : '' }}" name="necro">

                <option value="" disabled selected>Necro</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="b3">B3</option>
                <option value="b4">B4</option>
                <option value="b5">B5</option>
                <option value="b6">B6</option>
                <option value="b7">B7</option>
                <option value="b8">B8</option>
                <option value="b9">B9</option>
                <option value="b10">B10</option>
                <option value="b11">B11</option>
                <option value="b12">B12</option>

            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-skull"></span>
                </div>
            </div>
            @if($errors->has('necro'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('necro') }}</strong>
            </div>
            @endif

            {{-- Iron Field --}}
            <select class="form-control col-sm-6 {{ $errors->has('iron') ? 'is-invalid' : '' }}" name="iron"
                style="margin-left: 5px">

                <option value="" disabled selected>Fortaleza</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="b3">B3</option>
                <option value="b4">B4</option>
                <option value="b5">B5</option>
                <option value="b6">B6</option>
                <option value="b7">B7</option>
                <option value="b8">B8</option>
                <option value="b9">B9</option>
                <option value="b10">B10</option>

            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fab fa-fort-awesome"></span>
                </div>
            </div>
            @if($errors->has('iron'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('iron') }}</strong>
            </div>
            @endif
        </div>



        {{-- Crypt Field --}}
        <div class="input-group mb-3">
            <select class="form-control col-sm-12 {{ $errors->has('crypt') ? 'is-invalid' : '' }}" name="crypt">

                <option value="" disabled selected>Cripta da Justiceira</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="b3">B3</option>
                <option value="b4">B4</option>
                <option value="b5">B5</option>
                <option value="b6">B6</option>
                <option value="b7">B7</option>
                <option value="b8">B8</option>
                <option value="b9">B9</option>
                <option value="b10">B10</option>

            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-balance-scale-left"></span>
                </div>
            </div>
            @if($errors->has('crypt'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('crypt') }}</strong>
            </div>
            @endif
        </div>

        {{-- TOA field --}}
        <div class="input-group mb-3">
            <input type="text" name="toan" class="form-control col-sm-6 {{ $errors->has('toan') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.toan') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-gopuram" style="margin-right: 5px"></span>
                </div>
            </div>
            @if($errors->has('toan'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('toan') }}</strong>
            </div>
            @endif

            <input type="text" name="toah" class="form-control col-sm-6 {{ $errors->has('toah') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.toah') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-gopuram"></span>
                </div>
            </div>
            @if($errors->has('toah'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('toah') }}</strong>
            </div>
            @endif
        </div>

        {{-- Arena field --}}
        <div class="input-group mb-3">
            <input type="text" name="arena"
                class="form-control col-sm-4 {{ $errors->has('arena') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.arena') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-shield-virus"></span>
                </div>
            </div>
            @if($errors->has('arena'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('arena') }}</strong>
            </div>
            @endif

            {{-- RTA field --}}
            <input type="text" name="rta" class="form-control col-sm-4 {{ $errors->has('rta') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.rta') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-shield-virus"></span>
                </div>
            </div>
            @if($errors->has('rta'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('rta') }}</strong>
            </div>
            @endif

            {{-- Special League field --}}
            <input type="text" name="special_league"
                class="form-control col-sm-4 {{ $errors->has('special_league') ? 'is-invalid' : '' }}"
                placeholder="{{ __('adminlte::adminlte.special_league') }}" style="margin-left: 5px">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span style="width:20px" class="fas fa-shield-virus"></span>
                </div>
            </div>
            @if($errors->has('special_league'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('special_league') }}</strong>
            </div>
            @endif
        </div>

        {{-- Register/Clear button --}}
        <button type="submit" class="btn col-sm-5 {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            Cadastrar Membro
        </button>

        <button type="reset" class="btn col-sm-5 {{ config('adminlte.classes_auth_btn', 'btn-flat btn-warning') }}">
            <span class="fas fa-user-minus"></span>
            Limpar Campos
        </button>

    </form>
</div>

@endsection