<!Doctype html>
<html>
<head>
	<style>
	li{
		list-style: none;
	}
</style>
<title>View Student Records</title>
</head>
<body>
	<br><br><br>
	<h2 style="color:blue; text-align:center;">Edit Student Records</h2>
<table border = "1" align="center" style="font-size: 20px;">
	@if (Session::has('success'))
    <div class="alert alert-success" align="center">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
<tr>
<td>ID</td>
<td>First Name</td>
<td>Lastst Name</td>
<td>City Name</td>
<td>Email</td>
<td>Edit</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->city_name }}</td>
<td>{{ $user->email }}</td>
<td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>