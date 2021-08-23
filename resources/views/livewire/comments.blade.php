<div style="text-align: center">
    <form wire:submit.prevent="addComment">
        <input type="text" wire:model.lazy="newComment">
        <button type="submit">POST</button>
    </form>
    <ul>
        @foreach($comments as $comment)
        <li>
            <p><b>{{ $comment->user->name }}</b> <small>{{ $comment->created_at->diffForHumans() }}</small></p>
            <p>{{ $comment->body }}</p>
        </li>
        @endforeach
    </ul>
</div>
