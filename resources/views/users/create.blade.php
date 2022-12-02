@extends('layouts.app')

@section('content')

    @include('includes.validations-form')

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        <legend>Cadastro de Usuários</legend>
        @include('users._partials.form')
    </form>
@endsection