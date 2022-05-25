<?php

namespace database;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:
				host=localhost;
				dbname=miniframework;
				charset=utf8",

				//usuario 
				"root",
				// password
				"" 
			);

			return $conn;

		} catch (\PDOException $e) {

			// Ocorreu um erro ao conectar-se com o banco

			
		}
	}
}

?>