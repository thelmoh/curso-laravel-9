@extends('layouts.app')

@section('content')
        <h1>Detalhes do Usuário</h1>
        <div class="card" style="width: 18rem;">
          @if ($user->image)
            <img src="{{ url("storage/{$user->image}") }}" class="card-img-top" alt="{{ $user->name }}"> 
          @else
            <img src="{{ url("images/favicon.ico") }}" class="card-img-top" alt="Sem foto">
          @endif
            
            <div class="card-body">
              <h5 class="card-title">{{ $user->name }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
              <p class="card-text">User Created At: {{ $user->created_at }} / User updated at: {{$user->updated_at}}</p>
            </div>
            <div class="card-footer">
              <form action="{{route('users.destroy', $user->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger "><i class="bi bi-eraser"></i>APAGAR</button>
              </form>
            </div>
          </div>
@endsection