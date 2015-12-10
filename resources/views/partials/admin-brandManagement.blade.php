<table class="table table-hover">
<caption><h3><u>Managing your brands!</u></h3></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Brand name</th>
			<th>Brand type</th>
			<th style="text-align: center">Update</th>
		</tr>
	</thead>
	<tbody>
	<?php $i = 0 ?>
	@foreach($brands as $brand)
		<tr>
			<td>{{ $i+=1 }}</td>
			<td>{{ $brand->brand_name }}</td>
			<td>{{ $brand->brand_type }}</td>
			<td style="text-align: center">
	            <a href="{{ route('admin.editBrand', $brand->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="col-sm-8 col-sm-offset-4">
	<div>{!! $brands->render() !!}</div>
</div>