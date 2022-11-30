@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Usuário" value="{{$user->name ?? old('name') }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">E-mail:</label>
    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail do Usuário" value="{{$user->email ?? old('email') }}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password" id="password" class="form-control">
</div>
<div class="mb-3">
    <input type="submit" value="Enviar" class="btn btn-primary">
    <a href="{{route('users.index')}}" class="btn btn-info">Voltar</a>
</div>