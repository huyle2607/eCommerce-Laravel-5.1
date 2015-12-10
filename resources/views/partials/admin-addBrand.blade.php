<div class="panel panel-info brand-panel">
	<div class="panel panel-heading">
		<h3>Inserting new brand</h3>
	</div>
	<div class="panel-body">
	@if(count($errors))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Errors!</strong> Please check your input again!
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	   <form action="{{ route('admin.storeBrand') }}" method="POST" role="form" class="brand-insert-form">
	   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	   	<div class="form-group">
	   		<label for="">Brand name</label>
	   		<input type="text" name="brand_name" class="form-control" id="brandName">
	   	</div>
	   	<div class="form-group">
	   		<label for="">Brand type</label>
	   		<input type="text" name="brand_type" class="form-control" id="brandType" placeholder="e.g: camera_phone_tv">
	   	</div>
	   
	   	<button type="submit" class="btn btn-primary">Add</button>
	   	<button type="reset" class="btn btn-danger" >Reset</button>
	   </form>
	</div>
</div>