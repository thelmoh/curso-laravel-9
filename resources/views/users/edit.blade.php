@extends('layouts.app')

@section('content')

    @include('includes.validations-form')

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        <legend>Alteração de Usuários</legend>
        @include('users._partials.form')
    </form>
@endsection