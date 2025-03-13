<?php
// Простой роутер с использованием $_SERVER
// Считываем маршруты из файла routes.json
$routes = json_decode(file_get_contents('config/routes.json'), true);

// Получаем URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Получаем HTTP-метод
$method = $_SERVER['REQUEST_METHOD'];

// Убираем слеши с концов URL для удобства
$url = rtrim($url, '/');

/*
var_dump();
*/
//var_dump($url);

// Проверяем, существует ли такой маршрут и метод
if (isset($routes[$url]) && isset($routes[$url][$method])) {
	
    // Получаем контроллер и метод для данного маршрута
    $controller = $routes[$url][$method]['ctrl'];
    $method_name = $routes[$url][$method]['method'];
	
	require_once __DIR__."/citadel/db/MySQL.php";
	require_once __DIR__."/citadel/ctrl/{$controller}.php";
	
    // Проверяем, существует ли этот контроллер
    if (class_exists($controller)) {
		
		// Получаем экземпляр базы данных
		$db = MySQL::getInstance();
		$connection = $db->getConnection();
        $controller_instance = new $controller();

		
        // Проверяем, существует ли метод в контроллере
        if (method_exists($controller_instance, $method_name)) {
            // Вызываем метод контроллера
            $controller_instance->$method_name();
        } else {
            echo "Метод $method_name не найден в контроллере $controller.";
        }
    } else {
        echo "Контроллер $controller не найден.";
    }
} else {
    echo "404 - Страница не найдена или метод не поддерживается.";
}

/*
714D34
*/
