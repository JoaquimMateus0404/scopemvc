<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;



class IndexController extends Action {

		public function index() {

			$Users = Container::Model('User');

			$Users = $Users->getAll();

			@$this->view->users = $Users;

			$this->render('index', 'layout');
		}

		// Listar Todos os dados
		public function store($request){

			//
		}

	    // Eliminar um item do banco
		public function edit($id){

			//
		}
	
		// Atualizar um item do banco de dados
		public function update($id){
	
			//
		}
	
		// Apagar um item do banco de dados
		public function destroy($id){
	
			//
		}

}


?>