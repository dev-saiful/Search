<?php include "Databases/search.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2 class="text-center">All People</h2>
			</div> 
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 mx-auto">
						<form class="my-4">
					<div class="input-group">
						<input type="text" class="form-control" name="q" placeholder="Search....">
						<div class="input-group-append">
							<button type="submit" class="btn btn-outline-info">Search</button>
						</div>
					</div>
				</form>
					</div>
				</div>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($result as $row): ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['Name']; ?></td>
							<td><?php echo $row['Email']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>