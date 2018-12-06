<?php
	const DB = 'mysql';
   	const DB_SERVIDOR = 'localhost';
   	const DB_CHARSET = 'utf8';

	abstract class BD {
		private static $db_usuario = '';
		private static $db_pass = '';
		private static $db_servidor = DB_SERVIDOR;
		private static $db_nombre = '';
		private static $db_charset = DB_CHARSET;
		private $conexion; #Conectar con la BD

		# Conexión con BD
		public function conectar() {
			try {

			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}
		private function desconectar() {
			$this->conexion = null;
		}

		# C R U D
		abstract protected function insertar($registro); //Crear
		abstract protected function consultar(); //Read
		abstract protected function actualizar($registro); //Update
		abstract protected function eliminar($accion, $eliminar); //Delete



	}


?>