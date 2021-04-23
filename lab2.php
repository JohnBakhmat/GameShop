<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

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
			$this->db = new SQLite3($path);
		}

		//Для CREATE, INSERT
		public function Execute(string $query)
		{
			$this->db->exec($query);
		}

		//Для SELECT
		public function Query($query)
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
			$this->Execute('');
		}

		//Написати метод додавання даних в таблиці.
		public function PopulateTables()
		{
			$this->Execute('');
		}

		//Реалізувати метод видалення запису з таблиці.
		public function Remove()
		{
			$this->Execute('');
		}
	}

	$db = new DbController("./app.db");
	$db->Execute('CREATE TABLE foo (bar TEXT)');
	$db->Execute("INSERT INTO foo (bar) VALUES ('This is a test')");

	$result = $db->Query('SELECT bar FROM foo');
	var_dump($result->fetchArray());
	?>
</body>