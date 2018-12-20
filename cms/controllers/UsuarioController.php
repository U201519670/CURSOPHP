<?php

require_once 'models/usuario.php';

class UsuarioController {

	public function registro() {
		require_once('./views/includes/cabecera.php');
		require_once('./views/includes/pie.php');
	}

	public function guardarUsuario($datos) {
		$errores = '';
		if (!isset($datos['email'])) {
			$errores = "<p>Falta el nombre</p>";
		}

		$usuario = new Usuario();
		$usuario->guardarUsuario($datos);
		session_destroy();

	}


}