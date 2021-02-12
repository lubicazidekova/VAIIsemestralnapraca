
@if ($errors->any())

    <ul class="alert alert-danger" >
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif

<form method="post" action="{{url('/comments')}}" >
    @csrf

<div class="card-body" style="font-family: 'Times New Roman'">
    <div class="form-group row  " style="width:50vw">
        <h4>Comment section</h4>
        <label for="name" class="row-cols-sm-4  col-form-label"></label><br>

        <div class="col-sm-10" >
            <input style="height: 15vw" type="text" class="form-control" id="text" name="text" placeholder="Type your comment here" >
        </div>
    </div>

    <div class="form-group row">
        <button type="submit" class="btn btn-dark">Add comment</button>
    </div>
    <input type="hidden" class="form-control" id="article_id" name="article_id"  value="{{$article->id}}">
    <input type="hidden" class="form-control" id="user_id" name="user_id"  value="{{auth()->user()->id}}">
</div>
</form>
