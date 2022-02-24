<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Pagination</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-success">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h3 align="center" class="mt-3 mb-3">Dewan Pagination Bootstrap 4</h3>

		<div class="row">
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Standar</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<nav aria-label="Page navigation example">
						  <ul class="pagination">
						    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item"><a class="page-link" href="#">Next</a></li>
						  </ul>
						</nav>
					</p>
				  </div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Working with Icons</h5>
				  <div class="card-body">
				    <p class="card-text">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
						  </ul>
						</nav>
					</p>
				  </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Disabled and Active States</h5>
				  <div class="card-body">
				    <p class="card-text">
						<nav aria-label="example">
						  <ul class="pagination">
						    <li class="page-item disabled">
						      <span class="page-link">Previous</span>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item active" aria-current="page">
						      <span class="page-link">
						        2
						        <span class="sr-only">(current)</span>
						      </span>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next</a>
						    </li>
						  </ul>
						</nav>
					</p>
				  </div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Sizing</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<nav aria-label="example3">
							<ul class="pagination pagination-lg">
								<li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active" aria-current="page">
								  <span class="page-link">
								    1
								    <span class="sr-only">(current)</span>
								  </span>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
							      <a class="page-link" href="#">Next</a>
							    </li>
							</ul>
						</nav>

						<nav aria-label="example4">
							<ul class="pagination pagination-sm">
								<li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active" aria-current="page">
								  <span class="page-link">
								    1
								    <span class="sr-only">(current)</span>
								  </span>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
							      <a class="page-link" href="#">Next</a>
							    </li>
							</ul>
						</nav>
					</p>
				  </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="card mb-4">
				  	<h5 class="card-header bg-success text-white" align="center">Align Center</h5>
				  	<div class="card-body">
					    <p class="card-text">
					    	<nav aria-label="Page navigation example">
							  <ul class="pagination justify-content-center">
							    <li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
							    <li class="page-item"><a class="page-link" href="#">1</a></li>
							    <li class="page-item"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">Next</a>
							    </li>
							  </ul>
							</nav>
						</p>
				  	</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Align Right</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<nav aria-label="Page navigation example">
						  <ul class="pagination justify-content-end">
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next</a>
						    </li>
						  </ul>
						</nav>
					</p>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar bg-dark">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>
</body>
</html>