session_start();
if(isset($_POST['Login']))
{
	$email=$_POST('email');
	$password=$_post('password');
	$query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password'";
	$result=mysql_query($conn,$query);
	$row=mysql_fetch_array($result,MYSQLI_ASSOC);
	
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['email']=$login_user;
		header("location: index.php");
	}
	else
	{
		$error="Incorrect emailid of password.";
	}
}