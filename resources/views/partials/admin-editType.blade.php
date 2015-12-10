<div class="panel panel-info">
	<div class="panel panel-heading">
		<h3>Editing type</h3>
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
	   <form action="{{ route('admin.updateType', $type->id) }}" method="POST" role="form" class="brand-insert-form">
	   		<input type="hidden" name="_method" value="PUT">
	   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	   	<div class="form-group">
	   		<label for="">Type name</label>
	   		<input type="text" name="type_name" class="form-control" id="typeName" value="{{ $type->type_name }}">
	   	</div>
	   
	   	<button type="submit" class="btn btn-primary">Update</button>
	   	<button type="button" class="btn btn-danger" onclick="history.back()">Back</button>
	   </form>
	</div>
</div>