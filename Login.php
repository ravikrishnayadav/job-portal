<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
	body
	{
		background-image:url('backgroundimage.jpg');
		background-size:cover;;
	}
     form{
		 background-color:#fff;
		margin-top:2em;
		margin-left:30em;
		margin-right:10em;
		padding:15px;
		box-shadow: 10px 10px 8px 10px #888888;
	 }		
    </style>
    <title>Register</title>	
  </head>
  <body>
    <div class-"container">
	<form action="index.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div> 
  <button type="submit" class="btn btn-primary",name="Login">Submit</button>
  <p style="text-align:center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
</form>	
	</div>
  </body>
  </html>
  
  