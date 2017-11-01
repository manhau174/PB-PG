	
	<div style="padding: 20px; border : 0.5px solid black;border-radius: 10px;">
		<legend>Recruitment Information</legend>
		<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Rate</label>
				<input type="text" class="form-control" id="rate"  name="rate" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">About</label>
				<textarea class="form-control" name="about" id="about"></textarea>
			</div>
	</div>
	<script type="text/javascript">
		CKEDITOR.replace('about');
	</script>