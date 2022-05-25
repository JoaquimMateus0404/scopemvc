<?php

namespace App\Models;

use MF\Model\Model;

class User extends Model {


    // Retornar todos os dados da tabela
	public function getAll(){

        $query = "select * from tb_exemplo";

        return $this->db->query($query)->fetchAll();
    }

    // Gravar dados no banco
    public function save(){

        //
    }


    // Exibir um dado expecifico por meu do seu id
    public function show($id){

        // 
    }

    // Eliminar um item do banco
    public function edit($id){

        //
    }

    // Atualizar um item do banco de dados
    public function update( $request, $id){

        //
    }

    // Apagar um item do banco de dados
    public function destroy($id){

        //
    }









}

?>