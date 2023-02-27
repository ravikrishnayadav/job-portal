<html>
<head>
	<link rel="stylesheet" href="Style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Dashboard</title>
	
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<?php include 'config.php'?>
<!-- Page content -->
<div class="content">
	<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
	<form method="POST" >
  <div class="mb-3">
    <label for="Company Name" class="form-label">company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPostion" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
   <textarea   id="" cols="30" rows="10" class="form-control" name="jdesc"></textarea>
  </div>
    <div class="mb-3">
  <label class="form-label" for="Skills Required">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
  <label class="form-label" for="CTC">CTC</label>
    <input type="text" class="form-control" id="CTC"  name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
     <?php
		$server='localhost';
		$username='root';
		$password='';
		$database='jobs';                     

		$conn=mysqli_connect($server,$username,$password,$database);

		if($conn->connect_error){
			die("connection failed".$conn->connect_error);
		}
		echo"";

		$sql="SELECT id,cname,position,CTC FROM job";
		$result=mysqli_query($conn,$sql);
		$i=0;
		if($result->num_rows>0){
			while($rows=$result->fetch_assoc()){
				echo"
				<tbody>
				<tr>
				<td>".++$i."</td>
				 <td>".$rows['cname']."</td>
			     <td>".$rows['position']."</td>
			     <td>".$rows['CTC']."</td>
				 </tr>";
		}}
	 ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>