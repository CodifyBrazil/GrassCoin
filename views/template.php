<!DOCTYPE html>
<html>
<head>
	<title>Cripto Moeda</title>
	<link href="assets/css/emoji.css" rel="stylesheet">
	<link rel="stylesheet" href="sistema/emoji-em/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="top-side-bar">		
		<div class="dropdraw-login">
			<?php if(!isset($_SESSION['user'])): ?>
				<button class="login"><i class="fa fa-user"></i> <?php $this->lang->get('WELCOME');?></button>
			<?php endif; ?>
			<div class="login-template">
				<?php if(!isset($_SESSION['user'])):?>
					<button><?php $this->lang->get('LOGIN');?></button><br />
					<button><?php $this->lang->get('CADASTRO');?></button>
				<?php endif;?>
			</div>
		</div>
		<div class="droprawn-lang">
			<div class="select-lang">
				<a href="<?php echo BASE_URL; ?>lang/set/us"><img src="sistema/bandeiras/us.png"> <?php $this->lang->get('LANGUAGE');?></a>
			</div>
			<div class="langs">
				<a href="<?php echo BASE_URL; ?>lang/set/es"><i><img src="sistema/bandeiras/es.png"> Espanhol</a><br />
				<a href="#"><img src="sistema/bandeiras/gb.png"> Inglaterra</a><br />
				<a href="#"><img src="sistema/bandeiras/it.png"> Italia</a><br />
				<a href="#"><img src="sistema/bandeiras/kr.png"> Korea</a><br />
			</div>			
		</div>
	</div>	
	
	<?php $this->loadViewInTemplate($viewName, $viewData) ?><!-- As view sao carregadas aqui dentro  -->


	
	
	<div style="clear: both;"></div>
</body>

<script type="text/javascript" src="assets/js/jQuery.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</html>