<table class="table table-hover">
<caption><h3><u>Managing your products!</u></h3></caption>
	<thead>
		<tr>
			<th>No</th>
			<th style="text-align: center">Image</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Type</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Feature product</th>
			<th style="text-align: center">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php $i = 0 ?>
	@foreach($products as $product)
		<tr>
			<td>{{ $i+=1 }}</td>
			<td><img src="{{ asset('public/images/product_images/' .$product->image1) }}" alt="Product Image"
			 title="{{ $product->product_name }}" width="135" height="auto"></td>
			<td>{{ $product->product_name }}</td>
			<td>{{ $product->brand_id }}</td>
			<td>{{ $product->type_id }}</td>
			<td>{{ number_format($product->price, 0, ',', ',') }} &#8363;</td>
			<td>{{ $product->quantity }}</td>
			<td style="text-align: center">
				
			</td>
			<td>
				<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
	            <a href="{{ route('admin.productEdit', $product->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
	            {!! Form::open([
					'route' => ['admin.productDelete', $product->id],
					'method' => 'DELETE'
	            	])
	            !!}
	            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o" ></i></button>
	            {!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="col-sm-8 col-sm-offset-4">
	<div>{!! $products->render() !!}</div>
</div>