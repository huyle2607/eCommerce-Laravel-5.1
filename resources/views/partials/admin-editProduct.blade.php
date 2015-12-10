<div style="margin: 20px">
	<form action="{{ route('admin.updateProduct', $product->id) }}" enctype="multipart/form-data" method="POST" role="form" class="product-insert-form">
		<legend>Updating product information</legend>
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-info">
					<div class="panel panel-heading">
						<h4><i class="fa fa-info-circle"></i> Product information</h4>
					</div>
					<div class="panel-body">
					@if(count($errors))
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Errors!</strong> There are some errors here!
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   <div class="form-group">
							<label for="">Product name</label>
								<input type="text" name="product_name" class="form-control" required value="{{ $product->product_name }}">
							</div>
							<div class="form-group">
							<label for="">Type</label>
								<select name="type" id="inputType" class="form-control" required="required">
									<option value="">
									@foreach($types as $type)
									 	@if($product->type_id == $type->id)
											{{ $type->type_name }}
										@endif
									@endforeach
									</option>
									@foreach($types as $type)
									<option value="{{ $type->id }}">{{ $type->type_name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
							<label for="">Brand</label>
								<select name="brand" id="inputBrand" class="form-control" required="required">
									<option value="">
									@foreach($brands as $brand)
									 	@if($product->brand_id == $brand->id)
											{{ $brand->brand_name }}
										@endif
									@endforeach	
									</option>
									@foreach($brands as $brand)
									<option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
							<label for="">Price (&#8363;)</label>
								<input type="number" name="price" id="inputPrice" class="form-control price" value="{{ $product->price }}" min="100000" max="" step="10000" required="required">
							</div>
							<div class="form-group">
							<label for="">Sale price (&#8363;)</label>
								<input type="number" name="sale_price" id="inputSalePrice" class="form-control price" value="{{ $product->sale_price }}" min="0" max="" step="10000" placeholder="If no sale, place 0 here!">
							</div>
							<div class="form-group">
								<label for="">Quantity</label>
								<input type="number" name="quantity" id="input" class="form-control price" value="{{ $product->quantity }}" min="{5"} max="" step="" required="required" title="">
							</div>
						</div>
					</div>
				</div>
			<div class="col-sm-6">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<br>
					<br>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="">Product info</label>
							<textarea name="product_info" id="input" class="form-control" rows="4" required="required" style="resize: vertical">{{ $product->product_info }}</textarea>
						</div>
						<div class="form-group">
						<label for="">Short description</label>
							<textarea name="short_description" id="inputShort_description" class="form-control" rows="3" required="required" style="resize: vertical">{{ $product->short_description }}</textarea>
						</div>
						<div class="form-group">
						<label for="">Description</label>
							<textarea name="description" id="inputDescription" class="form-control" rows="7" required="required" style="resize: vertical">{{ $product->description }}</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel panel-heading">
						<h4><i class="fa fa-image fa-1x"></i> Images (480x360)</h4>
					</div>
					<div class="panel-body">
					   <label for="">Image1</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="image1" id="image" type="file" multiple required>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
	                <label for="">Image 2</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="image2" id="image" type="file" multiple>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
	                <label for="">Image 3</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="image3" id="image" type="file" multiple>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel panel-heading">
						<h4><i class="fa fa-file-image-o"></i> Thumbnails (55x41)</h4>
					</div>
					<div class="panel-body">
					   <label for="">Thumbnail 1</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="thumbnail1" id="image" type="file" multiple required>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
	                <label for="">Thumbnail 2</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="thumbnail2" id="image" type="file" multiple>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
	                <label for="">Thumbnail 3</label>
	                <div class="input-group form-group">
	                <span class="input-group-btn">
	                    <span class="btn btn-info btn-file">
	                        Browse&hellip; <input name="thumbnail3" id="image" type="file" multiple>
	                    </span>
	                </span>
	                <input type="text" class="form-control" readonly>
	                </div>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</form><!-- FORM -->
</div>