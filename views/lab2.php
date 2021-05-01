<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css" />
<a class="btn btn-success" href="index.php">Go back</a>

<body class="text-dark font-weight-bolder h3 m-3 p-3">
	<?php
	class DbController
	{
		public SQLite3 $db;

		//відкриття з'єднання з базою даних
		public function __construct(string $path = null)
		{
			try {
				$this->db = new SQLite3($path);
				$this->db->enableExceptions(true);
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
		}

		//Для CREATE, INSERT
		private function Execute(string $query)
		{
			$this->db->exec($query);
		}

		//Для SELECT
		private function Query($query)
		{
			return $this->db->query($query);
		}

		//закриття з'єднання з базою даних
		public function __destruct()
		{
			$this->db->close();
		}

		//Створити таблиці бази даних.
		public function Create()
		{
			try {
				$this->Execute("
				DROP TABLE GAME;
				CREATE TABLE GAME (
				ID INTEGER PRIMARY KEY,
				Game_Name TEXT,
				Developer TEXT,
				Publisher TEXT,
				Engine TEXT,
				Release_Year INTEGER,
				Price REAL
			);");
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
		}
		//Написати метод додавання даних в таблиці.
		public function Populate()
		{
			try {
				$this->Execute("INSERT INTO GAME VALUES (1,'Enter the Gungeon','Dodge Roll','Devolver Digital','Unity',2017,14.99); INSERT INTO GAME VALUES (2,'Stardew Valley','ConcernedApe','ConcernedApe','Microsoft XNA',2016,14.99);");
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
			// INSERT INTO GAME VALUES ('Animal Crossing: New Horizons','Nintendo EPD','Nintendo','Custom','Switch',2020,59.99);
		}

		//Реалізувати метод видалення запису з таблиці.
		public function Remove()
		{
			try {
				$this->Execute('DELETE FROM GAME WHERE ID = 1');
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
		}

		public function Select()
		{
			try {
				$results = $this->Query('SELECT * FROM GAME');
				$array = new ArrayObject();
				$indexer = 0;
				while ($row = $results->fetchArray()) {
					$array[$indexer] = $row;
					$indexer++;
				}
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
			return $array;
		}
	}

	$db = new DbController("/../app.db");
	$db->Create();
	$db->Populate();
	$array = $db->Select();
	var_dump($array);
	$db->Remove();
	$array = $db->Select();
	echo "<br><br>";
	var_dump($array);
	?>
</body>