@extends("layout.master")
@section("content")
<div class="container">
    <div class="row">
    <h1>post details</h1>
    <h3>{{$postDetails["post"]->title}}</h3>
    <ul>
   
        
        <li>{{$postDetails["post"]->content}}</li>
       
    
    </ul>
    </div>
    <div class="row">

    <h3>Comments </h3>
    <ul>
    @foreach($postDetails["comments"] as $key => $value)

    <li>{{$value->body}}</li>

    @endforeach
    </ul>
    </div>
    <form method="post" action="/comment/post/{{$postDetails['post']->id}}">
    {{csrf_field()}}
        <div class="row">
        <input type="text"  name="comment" class="col-xs-9" placeholder="leave comment">
        </div>
      <br>
        <div class="row">
        <input type="submit" class="col-xs-1 col-xs-offset-8 btn btn-info" value="comment"/>
        </div><br>
        @if(count($errors))
        <div class='col-xs-9 alert alert-danger'>
        <ul>
        
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
        @endif
    </form>

</div>
@endsection