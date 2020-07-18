<!doctype html>
<html lang="en"> 
	<head>	
	  <title>formulaire ajax</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <script src="insert.js"></script>

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
		 <form class="needs-validation" novalidate action='connexion.php' method='POST'>
		  <div class="form-row">
			<div class="col-md-6 mb-3">
			  <label for="validationTooltip01">First name</label>
			  <input type="text" name='firstname' class="form-control" id="validationTooltip01" value="" required>
			  <div class="valid-tooltip">
			  </div>
			</div>
			<div class="col-md-6 mb-3">
			  <label for="validationTooltip02">Last name</label>
			  <input type="text" name='lastname' class="form-control" id="validationTooltip02" value="" required>
			  <div class="valid-tooltip">
			  </div>
			</div>
		  </div>
		  <div class="form-row">
			<div class="col-md-6 mb-3">
			  <label for="validationTooltip03">Email</label>
			  <input type="text" name='email'class="form-control" id="validationTooltip03" value="" required>
			  <div class="valid-tooltip">
				Please provide a valid email.
			  </div>
			</div>
			<div class="col-md-6 mb-3">  
			  <label for="validationTooltip02">Password</label>
			  <input type="password" name='password' class="form-control" id="password" value="" required>
			  <div class="valid-tooltip">
			  </div>
			</div>
		  </div>
		  <button class="btn btn-primary" value="envoyer" type="submit">Submit form</button>
		 </form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  </body>
</html>
<script>