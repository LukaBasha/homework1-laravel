<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
</head>
<body>
	<div class="container card">
		<form method="POST" action="check_login.php">
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Product Name</label>
	    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Emailhelp" placeholder="Enter product name" name="name">
	  
		  </div>
		  <div class="form-group">
		    <label for="exampleInputtext1">Password</label>
		    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Enter Description" name="description">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>