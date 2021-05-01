<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Table - Brand</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css" />



</head>

<body>
	<div class="container-fluid">
		<a class="btn btn-success py-3 mt-3 mb-3 btn-block" href="index.php">Go back</a>
		<div class="card shadow">
			<div class="card-header py-3">
				<p class="text-primary m-0 font-weight-bold">Info</p>
			</div>
			<div class="card-body">
				<div class="table-responsive table mt-2" id="dataTable-div" role="grid" aria-describedby="dataTable_info">
					<table id="example" class="text-dark table table-bordered" style="width:100%">
						<thead class="thead-dark">
							<tr>
								<th>Id</th>
								<th>Game Name</th>
								<th>Developer</th>
								<th>Publisher</th>
								<th>Engine</th>
								<th>Release Year</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require __DIR__ . '/../controllers/game_controller.php';
							$games = (new DbController('../app.db'))->SelectALL();
							foreach ($games as $game) {
								echo '<tr>';
								echo '<td>' . $game->Id . '</td>';
								echo '<td>' . $game->Name . '</td>';
								echo '<td>' . $game->Developer . '</td>';
								echo '<td>' . $game->Publisher . '</td>';
								echo '<td>' . $game->Engine . '</td>';
								echo '<td>' . $game->Year . '</td>';
								echo '<td>' . $game->Price . '</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
	<script src="../assets/js/theme.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
</body>