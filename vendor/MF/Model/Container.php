<?php

namespace MF\Model;

use database\Connection;

class Container {

	public static function Model($model) {
		$class = "\\App\\Models\\".ucfirst($model);
		$Connection = Connection::getDb();

		return new $class($Connection);
	}
}


?>