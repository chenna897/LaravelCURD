<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<br><br><br>
<div style="background-color: #0000003b;margin: 65px auto 0;padding:53px 0;height: 200px;  box-shadow: 5px 10px 8px 10px #888888;width: 30%;align:center">
<h2 align="center"><span style="color:white;">Insert Student Details</span></h2>
@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
<table align="center">
<tr>
<td>First Name</td>
<td><input type='text' name='first_name' required pattern="[A-Za-z]{3,}" /></td>
<tr>
<td>Last Name</td>
<td><input type="text" name='last_name' required pattern="[A-Za-z]{3,}"/></td>
</tr>
<tr>
<td>City Name</td>
<td>
<select name="city_name">
<option value="AAA">AAA</option>
<option value="BBB">BBB</option>
</select></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name='email' required /></td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</div>
</form>
</body>
</html>
