@extends('layout.master')
@section('content')
<form method="post" action="/save/{{$postDetails->id}}">
{{csrf_field()}}
<label>post title</label>
<input type="text" name="etitle" value="{{$postDetails->title}}"><br>
<label>post content</label>
<input type="text" name="econtent" value="{{$postDetails->content}}"><br>
<input type="submit" name="submitBtn" value="edit Post">
</form>

@endsection