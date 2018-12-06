<?php

	require_once "BD.php";

	class Estudiantes_modelo extends BD {

		private $bd;
		public $nombre;
		public $paterno;
		public $materno;
		public $email;
		private $tabla = 'estudiantes';

		public function insertar($registro) {
			$conexion = parent::conectar();
		}

		public function consultar() {
			$conexion = parent::conectar();
			try {

			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function actualizar($registro) {
			$conexion = parent::conectar();
			try {

			} catch (Exception $e) {

			}
		}

		public function eliminar($accion, $eliminar) {
			$conexion = parent::conectar();
			if ($accion == 'todos') {
				try {
					
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			} else {
				try {
					
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			}
		}

	}


?>