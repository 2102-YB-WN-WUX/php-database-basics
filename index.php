<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>PHP Basics</title>
	</head>
	<body>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-12">
        <h1>Databases in PHP</h1>
        <?php include "database_connection.php"; ?>
      </div>
      <div class="col-12">
				<form action="action.php" method="post">
				  <div class="form-group">
						<label for="NameInput">Name</label>
				    <input type="text" name="name_input" class="form-control col-3" id="name_input" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="EyeInput">Eye Color</label>
				    <input type="text" name="eyecolor_input" class="form-control col-2" id="eyecolor_input" placeholder="Eye color">
				  </div>
					<div class="form-group">
				    <label for="AgeInput">Age</label>
				    <input type="text" name="age_input" class="form-control col-2" id="age_input" placeholder="Age">
				  </div>
				  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
				</form>
			</div>
    </div>
  </div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
