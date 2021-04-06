<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Table - Brand</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
					<a class="btn btn-success" href="lab1.php">Lab1</a>
					<div class="card shadow">
						<div class="card-header py-3">
							<p class="text-primary m-0 font-weight-bold">Info</p>
						</div>
						<div class="card-body">

							<div class="table-responsive table mt-2" id="dataTable-div" role="grid" aria-describedby="dataTable_info">
								<table id="example" class="text-dark table table-bordered" style="width:100%">
									<thead class="thead-dark">
										<tr>
											<th>Game Name</th>
											<th>Developer</th>
											<th>Publisher</th>
											<th>Engine</th>
											<th>Platforms</th>
											<th>Release Year</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody class="tbody-dark">
										<tr>
											<td>Enter the Gungeon</td>
											<td>Dodge Roll</td>
											<td>Devolver Digital</td>
											<td>Unity</td>
											<td>Windows, OSX, Linux, PS4, Xbox One, Switch</td>
											<td>2016-2017</td>
											<td>14.99 $</td>
										</tr>
										<tr>
											<td>Stardew Valley</td>
											<td>ConcernedApe</td>
											<td>ConcernedApe</td>
											<td>Microsoft XNA</td>
											<td>Windows, OSX, Linux, PS4, Xbox One, Switch, PSVita, IOS, Android</td>
											<td>2016</td>
											<td>14.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Animal Crossing: New Horizons</td>
											<td>Nintendo EPD</td>
											<td>Nintendo</td>
											<td>Custom</td>
											<td>Switch</td>
											<td>2020</td>
											<td>59.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Mortal Kombat 11</td>
											<td>NetherRealm Studios</td>
											<td>WB Games</td>
											<td>Unreal Engine 3</td>
											<td>PS4, PS5, Switch, Windows, Xbox One, XBox SX</td>
											<td>2019</td>
											<td>14.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Dead by Daylight</td>
											<td>Behaviour Interactive</td>
											<td>Behaviour Interactive</td>
											<td>Unreal Engine 4</td>
											<td>PS4, PS5, Switch, Windows, Xbox One, XBox Series X/S, Android, iOS</td>
											<td>2016</td>
											<td>9.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Megaman 11</td>
											<td>Capcom</td>
											<td>Capcom</td>
											<td>MT Framework</td>
											<td>Windows, PS4, Xbox One, Switch</td>
											<td>2018</td>
											<td>29.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Monster Hunter: Rise</td>
											<td>Capcom</td>
											<td>Capcom</td>
											<td>RE Engine</td>
											<td>Switch</td>
											<td>2021</td>
											<td>59.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Don't Starve</td>
											<td>Klei Entertainment</td>
											<td>Klei Entertainment</td>
											<td>Custom</td>
											<td>Windows, Linux, PS3, IOS, PSVita, Android, Wii U, PS4, Xbox One, Switch</td>
											<td>2018</td>
											<td>29.99&nbsp;$</td>
										</tr>
										<tr>
											<td>Doom Eternal</td>
											<td>id Software</td>
											<td>Bethesda Softworks</td>
											<td>id Tech 7</td>
											<td>Windows, PS4, Xbox One, Switch</td>
											<td>2020</td>
											<td>59,99 $</td>
										</tr>
										<tr>
											<td>Doom 3</td>
											<td>id Software</td>
											<td>Activision</td>
											<td>id Tech 4</td>
											<td>Windows, Linux, PS4, Xbox One, Switch</td>
											<td>2004-2007</td>
											<td>19,99 $</td>
										</tr>
										<tr>
											<td>GTA 3</td>
											<td>id Software</td>
											<td>Activision</td>
											<td>id Tech 4</td>
											<td>Windows, Linux, PS4, Xbox One, Switch</td>
											<td>2004-2007</td>
											<td>2,49 $</td>
										</tr>
									</tbody>
									<tfoot class="thead-dark">
										<tr>
											<th>Game Name</th>
											<th>Developer</th>
											<th>Publisher</th>
											<th>Engine</th>
											<th>Platforms</th>
											<th>Release Year</th>
											<th>Price</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="bg-white sticky-footer">
				<div class="container my-auto">
					<div class="text-center my-auto copyright"><span>Copyright © Connected 2020</span></div>
				</div>
			</footer>
		</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
	<script src="assets/js/theme.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
</body>

</html>