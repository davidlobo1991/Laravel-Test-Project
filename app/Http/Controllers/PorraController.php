<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DispatchesJobs, ValidatesRequests;

use App\Http\Requests;
use App\Partido;
use App\Resultado;
use Auth;
use Redirect;

class PorraController extends Controller
{
    public function view($diapartido = 1)
	{
		$partidos = Partido::where('dia_partido', '=', $diapartido)->get();
		$resultados = Resultado::all();
		$resultadoarray[] = array();

		if (Auth::check()) {
			foreach ($resultados as $resultado) {
				if ($resultado->id_user == Auth::user()->id) {
					$resultadoarray[] = $resultado;
				}
			}
		}

		return \View::make('porra')->with("partidos", $partidos)->with("resultadoarray", $resultadoarray);
	}

	public function store(Request $request)
	{
		if (Auth::check()) {

			$this->validate($request, [
				'variable.*.equipo_local' => 'required|numeric',
				'variable.*.equipo_visitante' => 'required|numeric',
			]);

			foreach ($request->variable as $variable) {
					$resultado = new Resultado;
					$resultado->id_user = Auth::user()->id;
					$resultado->id_partido = $variable['id_partido'];
					$resultado->goles_local = $variable['equipo_local'];
					$resultado->goles_visitante = $variable['equipo_visitante'];
					$resultado->save();
			}

			return Redirect::back()->with('message', 'Siii');

		}

		else {
			return Redirect::back()->with('message', "Registrate o logueate para poder apostar");
		}
	}
}
