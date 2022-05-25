<?php

namespace MF\Controller;

abstract class Action {

	protected $view;

	public function __construct() {
		$this->view = new \stdClass();
	}

	protected function render($view, $layout) {
		$this->view->page = $view;

		if(file_exists("../views/".$layout.".php")) {
			require_once "../views/".$layout.".php";
		} else {
			$this->content();
		}
	}

	protected function content() {
		$classAtual = get_class($this);

		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);

		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

		require_once "../views/".$classAtual."/".$this->view->page.".php";
	}
}

?>