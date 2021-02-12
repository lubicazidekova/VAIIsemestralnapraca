@extends('layouts.app')
@section('content')

    @if($event->id==1)
        <body class="maraudersmap" >
        <div id="div1"class="bg-text">

            <h1>{{$event->title}}</h1>
            <h2>{{$event->subtitle}}</h2>
            <h4>Venue:{{$event->title}}</h4>
            <h4> Date:{{$event->created_at->format('d/m/Y')}}</h4>
            <button>Get description</button>
        </div>

        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("#div1").text("{{$event->description}}");
                });
            });
        </script>
        </body>
    @elseif($event->id==2)
        <body class="cinemaStars" >
        <div id="div1"class="bg-text">

            <h1>{{$event->title}}</h1>
            <h2>{{$event->subtitle}}</h2>
            <h4>Venue:{{$event->title}}</h4>
            <h4> Date:{{$event->created_at->format('d/m/Y')}}</h4>
            <button>Get description</button>
        </div>

        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("#div1").text("{{$event->description}}");
                });
            });
        </script>
        </body>
    @elseif($event->id==3)
        <body class="pride" >
        <div id="div1"class="bg-text">

            <h1>{{$event->title}}</h1>
            <h2>{{$event->subtitle}}</h2>
            <h4>Venue:{{$event->title}}</h4>
            <h4> Date:{{$event->created_at->format('d/m/Y')}}</h4>
            <button>Get description</button>
        </div>

        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("#div1").text("{{$event->description}}");
                });
            });
        </script>
        </body>

   @else
    <body class="james" >
    <div id="div1"class="bg-text">

        <h1>{{$event->title}}</h1>
        <h2>{{$event->subtitle}}</h2>
        <h4>Venue:{{$event->title}}</h4>
        <h4> Date:{{$event->created_at->format('d/m/Y')}}</h4>
        <button>Get description</button>
    </div>

    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#div1").text("{{$event->description}}");
            });
        });
    </script>
    </body>
    @endif

















@endsection
