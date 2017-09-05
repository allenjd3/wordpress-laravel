@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-push-2">
<div class="panel">
<div class="panel-body">
	@foreach($posts as $post)
		<h1>{{$post->post_title}}</h1>
		{!! $post->post_content !!}
	@endforeach
</div>
</div>

</div>

@endsection