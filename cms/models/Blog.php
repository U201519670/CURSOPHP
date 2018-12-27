<?php
require_once 'ModeloBase.php';

class Blog extends ModeloBase {

	public function __construct() {
		parent::__construct();
	}

	public function obtenerCategorias() {
		$db = new ModeloBase();
		$query = "SELECT * FROM categorias ORDER BY categoria";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function guardarPublicacion($datos) {
		$db = new ModeloBase();
		try {
			$insertar = $db->insertar('articulos', $datos);
			if ($insertar == true) {
				$_SESSION['mensaje'] = 'Artículo publicado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

}
