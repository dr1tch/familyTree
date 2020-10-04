
	<div class="card">
		<div class="card-header h3">Personal Details</div>
		<table class="table table-striped h5">
			<tr>
				<td class="font-weight-bold">Username:</td>
				<td>{{ $user->username }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Name:</td>
				<td>{{ $user->name }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Gender</td>
				<td>{{ $user->gender ? 'Female' : 'Male' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Email:</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Date of Birth:</td>
				<td>{{ $user->birthdate }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">City:</td>
				<td>{{ $user->city ? $user->city : '' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Address:</td>
				<td>{{ $user->address ? $user->address : '' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Joined From:</td>
				<td>{{ $user->created_at->diffForHumans() }}</td>
			</tr>
		</table>
		</div>
		<div class="card-footer">
			<a href="{{'/profile/' . $user->username . '/edit'}}" class="btn btn-info">Edit</a>
		</div>
	</div>
