@extends('layouts.app')

@section('content')

    @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <legend>Cadastro de Usuários</legend>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Usuário" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail do Usuário" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">
            <a href="{{route('users.index')}}" class="btn btn-info">Voltar</a>
        </div>
    </form>
@endsection