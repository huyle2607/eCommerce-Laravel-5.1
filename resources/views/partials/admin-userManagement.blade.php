<table class="table table-hover">
<caption><h3><u>Managing your users!</u></h3></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Profile picture</th>
			<th>User name</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Password</th>			
			<th>Is_admin</th>
			<th>Is_active</th>	
			<th style="text-align:center">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php $i = 0 ?>
	@foreach($manage_users as $user)
	@if($user->is_admin == 0)
		<tr>
			<td>{{ $i+=1 }}</td>
			<td>
			@if($user->profile_pic == null)
				<img src="{{ asset('public/assets-admin/img/no-image.png') }}" alt="No Image"
				width="75" height="auto">
			@else
				<img src="{{ asset('public/assets-admin/img/'.$user->profile_pic) }}" 
				alt="Profile picture" width="75" height="auto">
			@endif
			</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->gender }}</td>
			<td>{{ $user->phone }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ str_limit($user->password, 20 )}}</td>
			<td>{{ $user->is_admin }}</td>
			<td style="text-align: center">
			@if($user->is_active == 1)
				<a href="#"><i class="fa fa-check-circle"></i></a>
			@else
				<a href="#"><i class="fa fa-times red"></i></a>
			@endif
			</td>
			<td style="text-align:center">
	            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
			</td>
		</tr>
	@endif
	@endforeach
	</tbody>
</table>
<div class="col-sm-8 col-sm-offset-2">
	<div>{!! $manage_users->render() !!}</div>
</div>