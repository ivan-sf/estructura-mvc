<?php namespace config;

/**
* 
*/
class Routes
{
	
	public static function run(request $request){
		$controlador = $request->getControlador() . "Controller";
		//print_r($controlador);
		$ruta = ROOT . "controllers" . DS . $controlador . ".php";
		$metodo = $request->getMetodo();
		$argumento = $request->getArgumento();
		//echo "$metodo";
		if ($metodo == '') {

		}
		if (is_readable($ruta)) {
			include_once $ruta;
			$mostrar = "Controllers\\" . $controlador;
			$controlador = new $mostrar;
			if (!isset($argumento)) {
				call_user_func(array($controlador, $metodo));
			}else{
				call_user_func_array(array($controlador, $metodo), $argumento);
			}
		}

		//CARGAR VISTAS
		$ruta = ROOT . "views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
		if (is_readable($ruta)) {
			require_once $ruta;
		}else{
			echo "No se encontro la ruta";
		}

	}
}