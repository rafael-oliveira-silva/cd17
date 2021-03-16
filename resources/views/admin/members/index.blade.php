@extends('adminlte::page')

@section('title', 'GERENCIAR MEMBROS')

@section('content_header')

<div class="card card-info">
    <div class="card-header">
        <h1 class="card-title">

            Lista de Membros

            <a href="{{ route('members.create') }}" class="btn btn-sm btn-success font-weight-bold">Novo Membro</a>

        </h1>
    </div>
</div>

@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Whatsapp</th>
                    <th>Nickname</th>
                    <th>Nível</th>
                    <th>Permissões</th>
                    <th>Estatísticas</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->whatsapp }}</td>
                    <td>{{ $member->nickname }}</td>
                    <td>{{ $member->level }}</td>
                    <td>@if($member['admin'] == 0) <i class="fas fa-user-tag"
                            style="color: #FA5430; padding-left:25%"></i>
                        @elseif ($member['admin'] == 1) <i class="fas fa-crown"
                            style="color: #FA5430; padding-left:25%"></i>
                        @else <i class="fas fa-shield-alt" style="color: #FA5430; padding-left:25%"></i>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('members.show', ['member' => $member->id]) }}"><i class="fas fa-eye"
                                style="color: #28A745; padding-left:25%"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('members.edit', ['member' => $member->id]) }}"><i class="fas fa-edit"
                                style="color: #17A2B8"></i></a>
                        <a href="{{ route('members.destroy', ['member' => $member->id]) }}"><i class="fas fa-trash-alt"
                                style="color: #DC3545; margin-left: 6px"></i></a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

{{ $members->links('pagination::bootstrap-4') }}

@endsection