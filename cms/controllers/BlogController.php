<?php

require_once 'models/blog.php';

class BlogController {

	public function index() {
    require_once('./views/includes/cabecera.php');
    require_once('./views/paginas/blog.php');
    require_once('./views/includes/pie.php');
	}

	public function publicar() {
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header('Location: index.php?page=login');
      die();
		} else {
			require_once('./views/includes/cabecera.php');
    	require_once('./views/admin/publicar.php');
    	require_once('./views/includes/pie.php');
		}
	}

	public function obtenerCategorias() {
		$categorias = new Blog();
		return $categorias->obtenerCategorias();
	}

	public function guardarPublicacion($datos) {
		date_default_timezone_set('UTC');
		$articulo = new Blog();
		$datos['publicado_por'] = $_SESSION['id_usuario'];
		$datos['fecha_creacion'] = date('Y-m-d');
		$datos['hora_creacion'] = date('h:i:s');
		return $articulo->guardarPublicacion($datos);
	}


}