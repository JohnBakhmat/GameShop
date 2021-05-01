<body>
	<?php
	require __DIR__ . '/../functions/file.php';
	require __DIR__ . '/../models/game.php';
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
		public function Add(Game $game)
		{
			try {
				$this->Execute("INSERT INTO GAME VALUES (" + $game->__toString() + ");");
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
		}
		//Реалізувати метод видалення запису з таблиці.
		public function Remove(int $id)
		{
			try {
				$this->Execute('DELETE FROM GAME WHERE ID = ' . $id);
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
		}

		public function SelectALL()
		{
			try {
				$results = $this->Query('SELECT * FROM GAME');
				$array = array();
				$indexer = 0;
				while ($row = $results->fetchArray()) {
					$game = new Game($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
					$array[$indexer] = $game;
					$indexer++;
				}
			} catch (Exception $e) {
				echo 'Поймано исключение: ' . $e->getMessage() . '<br>';
			}
			return $array;
		}
	}
	(new DbController('../app.db'))->SelectALL();

	?>
</body>