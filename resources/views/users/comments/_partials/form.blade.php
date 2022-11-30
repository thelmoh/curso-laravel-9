@csrf
<div class="mb-3">
    <label for="body" class="form-label">Comentário:</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$comment->body ?? old('body') }}</textarea>
</div>
<div class="mb-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="visible" name="visible"
            @if (isset($comment) && $comment->visible)
                checked="checked"
            @endif
        >
        <label class="form-check-label" for="visible">
          Visível
        </label>
    </div>
</div>
<div class="mb-3">
    <input type="submit" value="Enviar" class="btn btn-primary">
    <a href="{{route('users.index')}}" class="btn btn-info">Voltar</a>
</div>