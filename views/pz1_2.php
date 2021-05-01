<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
<div class="wrap-box m-3" align="center">
	<a class="btn btn-success" href="index.php">Go back</a>
	<table class="table-bordered table col-6">
		<thead>
			<tr>
				<th class="col-auto">IP</th>
				<th class="col-auto">Quantity</th>
				<th class="col-auto">Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$db = new SQLite3('../certain_counter.db');

			$db->exec("CREATE TABLE IF NOT EXISTS Visits(id INTEGER PRIMARY KEY,
                        ip TEXT,
                        countCER INTEGER,
                        dateCer DATE )");
			$db->exec('DELETE FROM Visits where ("date"!="$date")');

			$ip = $_SERVER['REMOTE_ADDR'];
			$ref = $_SERVER['HTTP_REFERER'];
			$dtime = date('Y-m-d', time());
			$db->exec("INSERT INTO Visits(ip, countCER, dateCer) VALUES('$ip', '1', '$dtime')");

			$db->exec("UPDATE Visits set countCER=countCER+1 where ip='$ip'");

			$sql = "SELECT ip, countCER, dateCer FROM Visits ";
			$result = $db->query($sql);
			$array = array();
			while ($data = $result->fetchArray(SQLITE3_ASSOC)) {
				$array[] = $data;
			}
			foreach ($array as $row) {
				echo '<tr>';
				echo '<td>' . $row['ip'] . '</td>';
				echo '<td>' . $row['countCER'] . '</td>';
				echo '<td>' . $row['dateCer'] . '</td>';
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
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

	<table style="text-align: center; margin: 2%;">
		<tr>
			<td width="100"><b>Время и дата</b></td>
			<td width="200"><b>Данные о посетителе</b></td>
			<td width="280"><b>IP/прокси</b></td>
			<td width="200"><b>Посещенный URL</b></td>
			<td width="200"><b>Имя пользователя</b></td>
		</tr>

		<?php
		for ($si = sizeof($file) - 1; $si + 1 > sizeof($file) - $col; $si--) {
			$string = explode("|", $file[$si]);
			$q1[$si] = $string[0];
			$q2[$si] = $string[1];
			$q3[$si] = $string[2];
			$q4[$si] = $string[3];
			$q5[$si] = $string[4];
			echo '<tr><td class="zz">' . $q1[$si] . '</td>';
			echo '<td>' . $q3[$si] . '</td>';
			echo '<td>' . $q2[$si] . '</td>';
			echo '<td>' . $q4[$si] . '</td>';
			echo '<td>' . $q5[$si] . '</td></tr>';
		}
		echo '</table>';
		?>
</div>
<hr>