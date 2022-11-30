@extends('layouts.app')

@section('content')

    @include('includes.validations-form')

    <form action="{{route('comments.update', $comment->id)}}" method="POST">
        @method('PUT')
        <legend>Alteração de Comentários</legend>
        @include('users.comments._partials.form')
    </form>
@endsection