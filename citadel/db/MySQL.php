<?php
class MySQL {
    private static $instance = null; // Единственный экземпляр
    private $connection; // Соединение с базой данных
    private $host = 'localhost'; // Хост
    private $dbname = 'test'; // Название базы данных
    private $username = 'root'; // Имя пользователя
    private $password = ''; // Пароль

    // Закрытый конструктор для предотвращения создания новых экземпляров
    private function __construct() {
        try {
            // Создание соединения с базой данных
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Установка режима ошибок для PDO
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Ошибка подключения: ' . $e->getMessage());
        }
    }

    // Метод для получения экземпляра
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Получить соединение
    public function getConnection() {
        return $this->connection;
    }

    // Защищаем от клонирования объекта
    private function __clone() {}

    // Защищаем от уничтожения объекта
    // protected function __wakeup() {}
}

/*
// Использование:
$db = Database::getInstance(); // Получаем единственный экземпляр базы данных
$connection = $db->getConnection(); // Получаем соединение

// Пример запроса к базе данных
$query = $connection->query('SELECT * FROM users');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
*/

//INSERT INTO `test` (`id`, `name`, `age`, `password`, `signup_date`) VALUES (NULL, 'kozel', '23', 'kozel23', current_timestamp());