<div id="comment">
    @foreach($article->comments as $comment)
        @include('comments.show')
        @endforeach

</div>
