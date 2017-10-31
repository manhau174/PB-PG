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
							<td>1</td>
							<td>{{$post->title}}</td>
							<td>
								<input type="button" name="" class="btn btn-success" value="Xem">
								<input type="button" name="" class="btn btn-primary" value="Sửa">
								<input type="button" name="" class="btn btn-danger" value="Xoá">
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