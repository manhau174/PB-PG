
@extends('layouts.header')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@extends('layouts.header');
@section('content')
	<div class="container">
		<div class="col-md-9 col-md-offset-1"><table class="table table-hover">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tiêu đề</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>{{$post->title}}</td>
							<td>
								<a href="{{ route('recruitment.detail',['slug'=>$post->slug]) }}" class="btn btn-success btn-sm" style="float:left">Xem</a>
								<a href="{{ route('post.update',['id'=>$post->id]) }}" class="btn btn-primary btn-sm" style="float:left">Sửa</a>
								<form action="{{route('recruitment.delete', $post->id)}}" method="POST" role="form" id="form_delete"  style="float:left">
									<button type="submit" class="btn btn-danger btn-sm">Xoá</button>
									<input type="hidden" name="_method" value="DELETE">
									{{csrf_field()}}
								</form>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
		</table></div>
		
	</div>
	
@endsection
@section('footer')
@include('layouts.footer')
@endsection