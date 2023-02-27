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
<div class="content">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
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
  $sql="select name,apply,year from candidates";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0){
	  while($rows=$result->fetch_assoc()){
		  echo'
	     <tr>
	     <th scope="row">'.++$i.'</th>
	     <td>'.$rows['name'].'</td>
		 <td>'.$rows['apply'].'</td>
		 <td>'.$rows['year'].'</td>
         </tr>';}}
        
   else{
     echo"";
	 }
	?>
  </tbody>
</table>
</div>
</div>
</body>
</html>