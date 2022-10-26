<?php

/**
 * Archivo de conexión a la base de datos
 */
class Conexion
{
  static public function conectar()
  {
    $link = new PDO(
      "mysql:host=localhost;dbname=db_sgi",
      "root",
      ""
    );
    $link->exec("set names utf8");
    return $link;
  }
}
