@extends('layouts.header_admin')
@section('content')
	<h1>Users</h1>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr id="row{{$user->id}}">
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					<a href="{{route('users.show', $user->id)}}" class="btn btn-primary btn-sm" style="float:left">Details</a>
					<a href="{{route('users.edit', $user->id)}}" class="btn btn-success btn-sm" style="float:left">Update</a>
					<!-- <form action="{{route('users.destroy', $user->id)}}" method="POST" role="form" id="form_delete"  style="float:left">
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						<input type="hidden" name="_method" value="DELETE">
						{{csrf_field()}}
					</form> -->
					<button type="submit" name="submit" class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<script type="text/javascript">
		$('.delete').click(function(){
			var id = $(this).data('id');
			swal({
				  title: "Are you sure?",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Yes, delete it!",
				},
			function(){
			  $.ajax({
			  		type : "DELETE",
					url : 'users/' + id,
					success: function(msg){
						toastr.success('Xoa thanh cong!');
						setTimeout(function() {
							$('#row'+id).remove();
						}, 1000);
					},
			  	});
			});
		});
	</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection