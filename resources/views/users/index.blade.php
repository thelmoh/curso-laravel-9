@extends('layouts.app')

@section('content')
      <h1>Listagem de Usuários <a href="{{ route('users.create') }}" class="btn btn-success">Novo Usuário</a></h1>
      <form action="#" method="GET">
        <div class="row col-5 mt-1 mb-2">
          <div class="col-auto">
            <input type="text" name="search" id="search" class="form-control mb-2" value="{{request()->get('search','')}}">
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
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <a href="{{ route('users.show', ['id'=>$user->id]) }}" class="btn btn-primary"><i class="bi bi-list"></i></a>
                      <a href="{{ route('users.edit', ['id'=>$user->id]) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                      <a href="{{ route('comments.index', ['id'=>$user->id]) }}" class="btn btn-primary"><i class="bi bi-journal-text"></i>({{$user->comments->count()}})</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          <div class="container mt-10">
            {{ 
              $users->appends([
                'search' => request()->get('search', '')
              ])->links()
            }}
          </div>
   @endsection