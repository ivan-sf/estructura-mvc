<?php namespace controllers;
$metodo = $request->getMetodo();
/**
* 
*/
class pruebasController
{
	public function index()
	{
		echo "Hola Isma desde Prueba";
		//header("location: index2.html");
	}
// http://localhost/contabilidad/prueba/request_enrutador/pruebas/ver/2
	public function ver($num)
	{
		echo "el numero es $num";
	}
}