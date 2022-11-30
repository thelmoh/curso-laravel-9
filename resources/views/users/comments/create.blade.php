@extends('layouts.app')

@section('content')

    @include('includes.validations-form')

    <form action="{{route('comments.store', $user->id)}}" method="POST">
        <legend>Cadastro de Comentário para o Usuário {{$user->name}}</legend>
        @include('users.comments._partials.form')
    </form>
@endsection