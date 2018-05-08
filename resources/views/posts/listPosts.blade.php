@extends("layout.master")



@section("content")
<div class="container">

    
    <table class="table table-bordered table-striped">
        <tr>
            <th>list posts</th>
            <th>actions</th>
        </tr>
        @foreach($data as $key => $value)
      
       
        <tr>
            <td>
        <dl>
            <img width="100" height="100" src="{{Storage::disk('local')->url($value->image)}}" >
            <dt><a href="posts/{{$value->id}}">{{$value->title}}</a></dt>
            <dt>{{$value->content}}</a></dt>
            <dd>{{$value->created_at->diffForHumans()}}</dd>
            
       
        </dl>
</td>
<td>
    <a  class="btn btn-success" href="/edit/{{$value->id}}">edit</a>
    <a class="btn btn-danger" href="/delete/{{$value->id}}">delete</a>
    <a  class="btn btn-primary" href="posts/{{$value->id}}">details</a>
</td>
    </tr>
    @endforeach    
</table>
    

</div>
@endsection










