<?php

	class ModelExemplo extends model{
		/*
			O MODEL SERVE PARA TER A INTERAÇAO DIRETA COM O BANCO DE DADOS,
			O RETURNO É DIRETAMENTE CONECTADO AO CONTROLLER,

			EXEMPLO ABAIXO...
		*/

			public function exemplo(){
				$array = array();

				$array = "Retorno de teste para o controller !!!";

				return $array; // este array eh retornado ao controller exemplo
			}
	}