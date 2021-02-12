@extends('layouts.app')
@section('content')

    <div class="bg-text" style="margin-top: 20%">
        Our tips for you to read&watch during lockdown
    </div>

<div class="gallery" >
        <img src="css/img/jpg/romeo.jpg" alt="romeoandjuliet" width="600" height="400">
    <div class="desc" id="img1">Romantic story</div>

</div>

<div class="gallery">
        <img id="img1" src="css/img/jpg/red2.jpg" alt="red2" width="600" height="400">
    <div class="desc" id="img2"> Action comedy</div>

</div>

<div class="gallery">
    <img src="css/img/jpg/klubzahad.jpg" alt="klub zahad" width="600" height="400">
    <div class="desc" id="img3">Child story</div>

</div>

<div class="gallery">
    <img src="css/img/jpg/gladiator.jpg" alt="gladiator" width="600" height="400" >
    <div class="desc" id="img4">Historical movie</div>

</div>
<script>
    $(document).ready(function(){
        $("img").click(function(){
            $("#img1").text("William Shakespear,Romeo&Juliet");
            $("#img2").text("RED2:Retired Extremly Dangerous");
            $("#img3").text("Thomas Brezina,The mystery club");
            $("#img4").text("Gladiator");

    });})
</script>
</body>

@endsection
