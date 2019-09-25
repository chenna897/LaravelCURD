<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
li{
	list-style: none;
}
</style>
</head>
<body>
	<br><br><br>
	<h2 style="color:blue; text-align:center;">Delete Student Records</h2>

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
<td>Last Name</td>
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
<td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>
