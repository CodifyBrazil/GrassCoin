<?php
	
	class exemploController extends controller{

		public function index(){
			$dados = array();

			$exemplo = new ModelExemplo();
			$dados['exemploController'] = $exemplo->exemplo();

			$this->loadTemplate("exemplo", $dados); // os dados usam um extract, que no caso extrai todos os array, e os 											transforma em variaveis unicas, isto desde o pai, entao cuidado, o 											   o campo (exemplo) é o nome da view, a variavel $dados, eh passada a 											  ela (view)... checar core/controller												
		}
	}