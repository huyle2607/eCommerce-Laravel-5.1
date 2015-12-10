<table class="table table-hover">
<caption><h3><u>Managing your types!</u></h3></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Type name</th>
			<th style="text-align:center">Update</th>
		</tr>
	</thead>
	<tbody>
	<?php $i = 0 ?>
	@foreach($types as $type)
		<tr>
			<td>{{ $i+=1 }}</td>
			<td>{{ $type->type_name }}</td>
			<td style="text-align:center">
	            <a href="{{ route('admin.editType', $type->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="col-sm-8 col-sm-offset-4">
	<div>{!! $types->render() !!}</div>
</div>