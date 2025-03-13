<?php

class HomeCtrl {
	public $title='CITADEL MINI-FRAMEWORK';
	
    public function index() {
		global $connection;
		$query = $connection->query('SELECT * FROM test');
		$rows = $query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($rows);
		
        // echo "GET - Главная страница";
		
		// переходим к представлению
		include './citadel/views/home.php';
    }

	public function test(){
		echo '0o0';
	}
}