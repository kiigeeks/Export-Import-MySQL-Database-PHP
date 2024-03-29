<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">    
		<meta name="description" content="KiiGeeks">
    <meta name="author" content="KiiGeeks">
    <meta name="keyword" content="KiiGeeks">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Export & Import DB MySQL</title>
  </head>

  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">EXPORT IMPORT DB</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<!-- <li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container mt-4">
			<div class="row justify-content-md-center">
				<div class="col col-lg-2">
					<a href="export_db_mysql.php">Export DB</a>
					<!-- <a href="ex2.php">Export DB</a> -->
				</div>
				<div class="col col-lg-2">
					<!-- Export & Import DB MySQL -->
					<a href="drop_alltable_db.php">Drop Data DB</a>
				</div>
				<div class="col col-lg-2">
					<a href="export_only_table_mysql.php">Export Only Table DB</a>
				</div>
			</div>
		</div>

		<div class="container mt-4">
			<form method="post" action="upload_only_data_table.php" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="filedb" class="form-label">Upload Data Dan Tabel</label>
					<input type="file" class="form-control" id="database2" name="database2" >
				</div>
				<button type="submit" class="btn btn-primary" name="uplot">Import DB</button>
			</form>
		</div>
<hr>
		<div class="container mt-4">
			<form method="post" action="upload_data_trigger_procedure_table.php" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="filedb" class="form-label">Upload Data Trigger Procedure Dan Tabel</label>
					<input type="file" class="form-control" id="database1" name="database1" >
				</div>
				<button type="submit" class="btn btn-primary" name="uplot">Import DB</button>
			</form>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>