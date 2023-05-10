@foreach($comments as $comment)
    <div class="display-comment" @if($comment->id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        hey hey
    </div>
@endforeach


