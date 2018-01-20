<?php
	
	class homeController extends controller {



		public function index(){
			if (isset($_SESSION['nomeUsuario']) && !empty($_SESSION['nomeUsuario'])){

			$dados = array();

			$fotos = new fotos();

			$fotos->saveFoto();

			$dados['fotos'] = $fotos->getFotos();

			$this->loadTemplate('home', $dados);
		}
			else{
				header("Location: /galeria_responsiva/login");
			}

		}

		public function curtir($id){

			$dados = array();
			$id = $id;
			$f = new fotos();

			if (!empty($id)) {
				$f->curtir($id);
				header("Location: /galeria_responsiva");
			}

		}

		public function descurtir($id){
			
		}
	}

?>