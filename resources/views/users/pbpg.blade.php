	
	<div style="padding: 20px; border : 0.5px solid black;border-radius: 10px;">
		<legend>PB/PG Information</legend>
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" id="address"  name="address" placeholder="Input field" >
		</div>

		<div class="form-group">
			<label for="">Mobile</label>
			<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Birthday</label>
			<input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Profile picture</label>
			<input type="file" class="form-control" id="profile_picture"  name="profile_picture" placeholder="Input field">
		</div>


		<div class="form-group">
			<label for="">Height</label>
			<input type="text" class="form-control" id="height"  name="height" placeholder="Input field" >
		</div>

		<div class="form-group">
			<label for="">Weight</label>
			<input type="text" class="form-control" id="weight"  name="weight" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description"></textarea>
		</div>
	</div>
	<script type="text/javascript">
		CKEDITOR.replace('description');
	</script>