<?php include 'config.php'?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Career</title>
	<style>
	.row{
		display:flex;
		margin-left:15px;
		justify-content: flex-start;	
	}
		
	.col-md-4{
		border:solid black;
		box-shadow: 10px 5px 5px lightblue;
		margin:10px;
		padding:5px;
		width:31%;
		border-spacing:5px;
		
		
	}
	.col-md-4 p{
	font-weight:normal;
	}
	.mb-3{
		font-weight:normal;
	}
		
	</style>
</head>
<body>
	
	
<div class="rows">
	<div class="col-12">
		<div class="jumbotron jumbotron-fluid" style="background-image:url(baner-2.jpg); background-size:200%; width:100%;height:200px;">
			<div class="container">
				<h1 class="display-4" style="color:white;margin-bottom:50px;"><strong>Job Portal<strong></h1>
				<p class="lead" style="color:white;"><strong>Best jobs available matching your skills<strong></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
 <?php
  $server='localhost';
   $username='root';
   $password='';
   $database='jobs';                     
    $conn=mysqli_connect($server,$username,$password,$database);
   $sql="SELECT cname,position,jdesc,CTC,skills FROM job";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){	
		echo'
		   <div class="col-md-4">
		   <div class="jobs">
		   <h3 style="text-align:center;">'.$rows['cname'].'</h3>
		   <h4 style="text-align:center;">'.$rows['position'].'</h4>
		   <p style="color:black;text-align:justify;">'.$rows['jdesc'].'</p>
		   <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
		   <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
		   <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
		   Apply Now
		   </BUTTON>
		   </div>
	       </div>';
		}
     }
	 ?>
	 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
		  <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div> 
		  <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>		  
		  <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="submit" name="sub" class="btn btn-secondary" >Apply</button>
		  
		</form>
      </div>
    </div>
  </div>
</div>
	 </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16/0/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>