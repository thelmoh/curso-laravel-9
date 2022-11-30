@extends('layouts.app')

@section('content')
      <h1>Comentários do Usuário {{$user->name}}<a href="{{ route('comments.create', $user->id) }}" class="btn btn-success">Novo Comentário</a></h1>
      <form action="{{ route('comments.index', $user->id) }}" method="GET">
        <div class="row col-5 mt-1 mb-2">
          <div class="col-auto">
            <input type="text" name="search" id="search" class="form-control mb-2">
          </div>
          <div class="col-auto">
              <button type="submit" class="btn btn-primary">Pesquisar</button>
          </div>
        </div>
      </form>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Conteúdo</th>
                <th scope="col">Visível</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <td>{{ $comment->body }}</td>
                    <td>{{ $comment->visible ? 'Sim' : 'Não' }}</td>
                    <td>
                      <a href="{{ route('comments.edit', ['user'=>$user->id, 'id'=>$comment->id]) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>        
   @endsection