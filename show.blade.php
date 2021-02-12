
<div class="card-body " style=" background-color: black;color: white;font-family: 'Times New Roman';border-bottom: white dotted">
    @auth
    <h1 class="text text-right " title="delete" data-method="DELETE">
        <a style="color: white" href="{{route('comment.delete',[$comment->id])}}">x</a>
    </h1>
@endauth

                    <h4 >
                        {{ $comment->text}}
                    </h4>
                    <br>
                <h6 class="post-footer" >
                    <p class="text" style="float: left">@<strong>{{$comment->user->name}}</strong></p>


                        <p class="text" style="float: right">{{$comment->created_at->format('d/m/Y')}}</p>



                </h6>


    </div>


