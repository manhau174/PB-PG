@extends('layouts.header_admin')
@section('content')
		<ul>
			<li><b>Recruitment's name</b> : {{$recruitment->name}}</li>
			<li><b>Title</b> : {{$post->title}}</li>
			<li><b>Address</b> : {{$post->address}}</li>
			<li><b>Start day</b> : {{$post->starting_day}}</li>
			<li><b>End day</b> : {{$post->ending_day}}</li>
			<li><b>Salary</b> : {{$post->salary}}</li>
			<li><b>City</b> : {{$city->name}}</li>
			<li><b>Content</b> :
				<textarea class="form-control" id="content" name="content" disabled>{{$post->content}}</textarea>
			</li>
		</ul>
		<script type="text/javascript">
			CKEDITOR.replace('content');
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection