<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
	<br><br><br>
	<h2 style="color:blue; text-align:center;">View Student Records</h2>
<table border = "1" align="center" style="font-size: 20px;">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->city_name }}</td>
<td>{{ $user->email }}</td>
</tr>
@endforeach
</table>
</body>
</html>