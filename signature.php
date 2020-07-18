<<!doctype html>
<html lang="en">
	<head>	
		<title>inscription</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  
	  <style>
	   .custom{
			   margin-left:200px;
	    }
	  </style>

	</head>
	<body>
       <div class= 'container'>
	     <div class='col-12 mt-5'>
		    <h2 class="text-center">Insert Data Using Ajax</h2>
		    <br/>
			<p id="alert" style="display:none;" class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i><span> id="show"</span></p>
			<br/>
			<hr/>
	   <div class='container'> 
	     <div class='row'>
			<div class='col-8 mt-3'>
				<form class='need-validation' novalidate action='presence.php' method='POST'>
				  <div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type='text'name="email" class="form-control" id="exampleInputEmail1" aria-describedby="email">
					<small id="email" class="form-text text-muted"></small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type='password' name="password" class="form-control" id="Password">
				  </div>
				  <div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" valeur='envoyer' class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    </body>
</html>
<script>