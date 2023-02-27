<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';                     
$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
echo"connected";

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['phone_no'];
	$password=$_POST['password'];
	
	$sql="INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
	if(mysqli_query($conn,$sql)){
		echo"Records inserted successfully";
	}
	else{
		echo"ERROR:Could not able to execute $sql.".mysqli_error($conn);
	}
}

session_start();
if(isset($_POST['Login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="SELECT * FROM 'users' WHERE 'email'='$email' AND 'password'='$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_row($result)==1){
		header("location:index.php");
	}
	else{
		$error='emailID or password is incorrect';
	}
}
if(isset($_POST['job'])){
	$cname=$_POST['cname'];
	$pos=$_POST['pos'];
	$jdesc=$_POST['jdesc'];
	$skills=$_POST['skills'];
	$CTC=$_POST['CTC'];
	
	$sql1="INSERT INTO `job`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
	if(mysqli_query($conn,$sql1)){
		echo"New job posted";
	}
	else{
		echo"ERROR:Failed to post the job $sql1.".mysqli_error($conn);
	}
}

if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$qual=$_POST['qual'];
	$apply=$_POST['apply'];
	$year=$_POST['year'];
	$sql2="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
   mysqli_query($conn,$sql2);
}
?>