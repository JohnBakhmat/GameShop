<!-- TODO 
24. Сайт для вивчення іноземних мов (персоналізовані плани навчання;
доступ до «пре доплатних/безкоштовних» обраних курсів; прогрес
проходження курсу; перевірка виданих сертифікатів після навчання(номер, 
прізвище, строк дії, країна); користувач може поділитися результатами в
соціальних мережах). -->

<!-- TODO Завдання перше:
✓ 1. створити клас Users з властивостями name, login, password;
✓ 2. створити три об'єкти від класу Users;
✓ 3. задати довільні значення властивостям для кожного з об'єктів;
Завдання номер два:
✓ 1. в класі Users потрібно описати метод getInfo ();
✓ 2. метод getInfo () повинен виводити значення властивостей об'єкта;
✓ 3. викликати метод getInfo () для кожного об'єкта;
Завдання третє,
✓ 1. в класі Users необхідно описати конструктор;
✓ 2. конструктор повинен задавати початкові значення властивостей name,
login, password;
?✓ 3. розробити заново три об'єкти, примірника класу Users;
Завдання четверте:
✓ 1. в класі Users описати метод __clone ();
✓ 2. метод __clone повинен задавати початкові значення властивостей за
замовчуванням при копіюванні об'єктів;
✓ 3. значення за замовчуванням: name = "User», login = «User», password =
«qwerty»;
✓ 4. розробити четвертий об'єкт, скопіювавши один з наявних об'єктів;
Завдання п'яте:
✓ 1. описати клас SuperUsers успадкований від класу Users;
✓ 2. у класі SuperUsers описати властивість character і створити об'єкт,
екземпляр класу SuperUsers;
✓ 3. задати значення властивості character = «admin»;
✓ 4. викликати метод getInfo() для створеного об'єкта;
✓ 5. окремо від методу getInfo() вивести значення властивості character;
Завдання шосте:
✓ 1. описати конструктор класу SuperUsers, який буде задавати початкові
значення властивостей;
✓ 2. в класі SuperUsers описати метод getInfo (), який буде виводити
значення цих властивостей;
✓ 3. розробити заново об'єкт класу SuperUsers і викликати метод getInfo(); -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css" />
<a class="btn btn-success" href="index.php">Go back</a>

<body class="text-dark font-weight-bolder h3 m-3 p-3">
	<?php
	class User
	{

		public ?string $name;
		public ?string $login;
		public ?string $password;
		public function __construct(?string $name, ?string $login, ?string $password)
		{
			$this->name = $name;
			$this->password = $password;
			$this->login = $login;
		}
		public function __clone()
		{
			$this->name = "User";
			$this->login = "User";
			$this->password = "qwerty";
		}
		public function getInfo(): string
		{
			$string = "<br>";
			$string .= $this->name;
			$string .= " ";
			$string .= $this->login;
			$string .= " ";
			$string .= $this->password;
			return $string;
		}
	}
	class SuperUser extends User
	{
		public ?string $character = "admin";
		public function getInfo(): string
		{
			$string = parent::getInfo();
			$string .= " ";
			$string .= $this->character;
			$string .= "<br>";
			return $string;
		}
	}

	class Support extends User
	{
		public ?string $character = "Support";
		public function getInfo(): string
		{
			$string = parent::getInfo();
			$string .= " ";
			$string .= $this->character;
			$string .= "<br>";
			return $string;
		}
	}

	class Customer extends User
	{
		public ?string $character = "customer";
		public array $purchaseHistory;
		public function getInfo(): string
		{
			$string = parent::getInfo();
			$string .= " ";
			$string .= $this->character;
			$string .= "<br>";
			return $string;
		}
	}
	$user1 = new User("John", "Bakhmat", "123123111");
	$user2 = new User("Julia", "Koba", "331231");
	$user3 = new User("Mykola", "Berkovskiy", "5656");
	$user4 = clone $user1;

	echo $user1->getInfo();
	echo $user2->getInfo();
	echo $user3->getInfo();
	echo $user4->getInfo();

	$SuperUser = new SuperUser("Mykola", "Berkovskiy", "331231");

	echo $SuperUser->getInfo();
	?>
</body>