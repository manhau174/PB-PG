@extends('layouts.header')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

@section('content')
	<div class="container">
		<div class="col-md-9 col-md-offset-1"><table class="table table-hover">
			
			<tbody>
				
					@foreach ($posts as $post)
						@foreach ($post->pbpgs as $pbpg)
						<tr>
							<td @if($pbpg->pivot->seen == 0) class="btn-danger" @endif ><a href="{{ route('notifications.detail', ['post_id' =>$post->id,'pbpg_id' =>$pbpg->id]) }}">{{$pbpg->full_name}} Đã đăng ký bài {{$post->title}}</a></td>
						</tr>	 
						@endforeach		
					@endforeach
					
			</tbody>
		</table></div>
		
	</div>
	
@endsection
@section('footer')
@include('layouts.footer')
@endsection