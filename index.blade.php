@extends('layouts.app')

@section('content')

    @foreach($articles as $article )
        <br>
        <div class="container align-content-center">
                        <div class="card-body text-center paper" style="color: black;font-family: 'Times New Roman';border-bottom: black dotted">

                            @auth
                                    <h1 class="text text-right " title="delete" data-method="DELETE" ><a style="color: black" href="{{route('article.delete',[$article->id])}}">x</a></h1>
                            @endauth

                            <h1>{{$article->title}}</h1>
                            <p>
                                {{ \Illuminate\Support\Str::limit($article->text,150) }}
                            </p>
                            <footer class="post-footer text-right">
                                <h3 class="text-lg-left">@<strong>{{$article->user->name}}</strong></h3>
                                <h6 class="text-sm-left">{{$article->comments->count()}} comments</h6>
                                <h3 ><a href="{{url('articles',$article->id)}}" class="read-more" style="font-size:2vw;color: black">Read more...</a></h3>
                                <time>
                                    <h6 style="font-size:1vw;color: black">{{$article->created_at->format('d/m/Y')}}</h6>
                                </time>
                            </footer>
                        </div>

                    </div>

        </div>


    @endforeach

@endsection
