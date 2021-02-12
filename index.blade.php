@extends('layouts.app')
@section('content')
    <body >

    @foreach($events as $event )

        <div class="flip-box ">
            <a href="{{ url('/events', $event->id) }}">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <img src="css/img/events/{{$event->image}}" alt="{{$event->title}}" style="width: 50vw;height: 25vw" >
                </div>
                <div class="flip-box-back ">
                    <img class="obr" src="css/img/events/{{$event->image}}" alt="{{$event->title}}" style="width: 50vw;height: 25vw" >
                    @if(fmod($event->id,2)==1)

                        <div class="nadpisHarry centered">
                    <h1>{{$event->title}}</h1>
                    <h3>{{$event->subtitle}}</h3>
                        </div>
                        @else
                        <div class="nadpisCinema centered">
                            <h2>{{$event->title}}</h2>
                            <h4>{{$event->subtitle}}</h4>
                        </div>

                    @endif

                </div>
            </div>
</a>
        </div>

    @endforeach

    </body>




@endsection



