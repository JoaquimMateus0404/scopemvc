<?php

namespace routes;

use MF\Init\Bootstrap;

class web extends Bootstrap {

	protected function initRoutes() {

		$routes['index'] = array(
			'route' => '/',
							 // Nome do controlador que se encontra na pasta Controller
			'controller' => 'IndexController',
			// Action, indica a função que essa routa (/) vai acessar...
			'action' => 'index'
		);

		
		// Pra criar uma nova routa é só seguir o mesmo padrão da routa inicial


        $routes['blog'] = array(

	        'route' => '/blog',
	                       
	        'controller' => 'BlogController',
	      
	        'action' => 'index'
        );

        












		$this->setRoutes($routes);
	}

}

?>