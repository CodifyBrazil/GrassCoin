<?php 


	class notFoundController extends controller{

		public function index(){

			$dados = array();

			$this->loadTemplate("404", $dados);
		}
	}