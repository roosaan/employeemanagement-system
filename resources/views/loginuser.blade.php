<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body><center>
<form method="post"action={{url('/loginuser')}}>
	{{csrf_field()}}

Enter email <br>
<input type="text" name='email'><br>
Enter password <br>
<input type="password" name='password'><br>
<input type="submit" name="submit"value="Login">


</form>
</center><nav>
	

</nav>
</body>
</html>