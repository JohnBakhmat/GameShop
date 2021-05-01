<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Table - Brand</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css" />



</head>

<body id="page-top">
	<div id="wrapper">
		<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
			<div class="container-fluid d-flex flex-column p-0">
				<a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
					<div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
					<div class="sidebar-brand-text mx-3"><span>Games</span></div>
				</a>
				<hr class="sidebar-divider my-0">
				<ul class="nav navbar-nav text-light" id="accordionSidebar">
					<li class="nav-item"><a class="nav-link"><i class="fas fa-user"></i><span>Profile</span></a></li>
					<li class="nav-item"><a class="nav-link active"><i class="fas fa-users"></i><span>Our games</span></a></li>
					<li class="nav-item"><a class="nav-link"><i class="far fa-user-circle"></i><span>Login</span></a></li>
					<li class="nav-item"><a class="nav-link"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
				</ul>
				<div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
			</div>
		</nav>
		<div class="d-flex flex-column" id="content-wrapper">
			<div id="content">
				<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
					<div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
						<form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
							<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
								<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
							</div>
						</form>
						<ul class="nav navbar-nav flex-nowrap ml-auto">
							<li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
								<div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
									<form class="form-inline mr-auto navbar-search w-100">
										<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
											<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
										</div>
									</form>
								</div>
							</li>

							<div class="d-none d-sm-block topbar-divider"></div>
							<li class="nav-item dropdown no-arrow">
								<div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Бахмат Евгений</span><img class="border rounded-circle img-profile" src="assets/img/avatars/photo_2020-05-22_15-45-20.jpg"></a>
									<div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
										<a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<div class="container-fluid">
					<h3 class="text-dark mb-4">Our games</h3>
					<div class="row">
						<div class="m-2">
							<a class="btn btn-success" href="lab1.php">Lab1</a>
							<a class="btn btn-success" href="lab2.php">Lab2</a>
						</div>
						<div class="m-2">
							<a class="btn btn-success" href="pz1_2.php">PZ1+PZ2</a>
							<a class="btn btn-success" href="pz3.php">PZ3</a>
						</div>
					</div>
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
			</div>
			<hr>
			<?php
			$agent = $_SERVER['HTTP_USER_AGENT'];
			$uri = $_SERVER['REQUEST_URI'];
			$user = $_SESSION['email'];
			$ip = $_SERVER['REMOTE_ADDR'];
			$ref = $_SERVER['HTTP_REFERER'];
			$dtime = date('r');

			if ($ref == "") {
				$ref = "None";
			}
			if ($user == "") {
				$user = "None";
			}

			$entry_line = "$dtime - IP: $ip | Agent: $agent | URL: $uri | Referrer: $ref | Username: $user \n";
			$fp = fopen("logs.txt", "a");
			fputs($fp, $entry_line);
			fclose($fp);
			?>

			<?php
			$file = file("logs.txt");
			$col = sizeof($file);
			?>
			<div class="row wrap-box">
				<div class="header">
					<div class="wrapper" style="text-align: center; margin: 2%;">
						<?php
						echo "<h3 >Последние <b>" . $col . "</b> посещений сайта:</h3>";
						?>
					</div>
				</div>
				<div class="card shadow">
					<div class="card-header py-3">
						<p class="text-primary m-0 font-weight-bold">Info</p>
					</div>
					<div class="card-body">
						<div class="table-responsive table mt-2" id="dataTable-div" role="grid" aria-describedby="dataTable_info">
							<table id="example2" class="text-dark table table-bordered" style="width:100%">
								<thead class="thead-dark">
									<tr>
										<td width="100"><b>Время и дата</b></td>
										<td width="200"><b>Данные о посетителе</b></td>
										<td width="280"><b>IP/прокси</b></td>
										<td width="200"><b>Посещенный URL</b></td>
										<td width="200"><b>Имя пользователя</b></td>
									</tr>
								</thead>
								<tbody>
									<?php
									for ($si = sizeof($file) - 1; $si + 1 > sizeof($file) - $col; $si--) {
										$string = explode("|", $file[$si]);
										$q1[$si] = $string[0];
										$q2[$si] = $string[1];
										$q3[$si] = $string[2];
										$q4[$si] = $string[3];
										$q5[$si] = $string[4];
										echo '<tr><td>' . $q1[$si] . '</td>';
										echo '<td>' . $q3[$si] . '</td>';
										echo '<td>' . $q2[$si] . '</td>';
										echo '<td>' . $q4[$si] . '</td>';
										echo '<td>' . $q5[$si] . '</td></tr>';
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<hr>
				<footer class="bg-white sticky-footer">
					<div class="container my-auto">
						<div class="text-center my-auto copyright"><span>Copyright © Connected 2020</span></div>
					</div>
				</footer>
			</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
		</div>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
		<script src="../assets/js/theme.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
				$('#example2').DataTable();
			});
		</script>
</body>

</html>