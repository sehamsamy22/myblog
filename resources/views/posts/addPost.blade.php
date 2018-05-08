@extends('layout.master')
@section('content')
<div class="col-lg-12 margin-tb">
<div class="pull-center">
<form    method="post" action="" enctype="multipart/form-data">
{{csrf_field()}}
<label>post title</label><br>
<input type="text" name="title" width="500px" class="form-control"><br>
<label>post content</label><br>
<input type="text" name="content"width="500px"class="form-control"><br>
<input type="file" name="image"><br>
<input type="submit" name="submitBtn" value="Add Post">
</form>
</div>
</div>
@endsection