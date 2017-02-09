@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Porra</div>
                    <div class="panel-body">
                        @if(count($errors) > 0)
                            <div class="errors">
                                <ul><li>Mirate bien las cosas anda</li></ul>
                            </div>
                        @endif

                        {{ Session::get('msg') }}


                            @if(count($resultadoarray) == 1)
                                <form method="post" class="resultados">
                                    <table>
                                        @for($i = 0; $i < count($partidos); $i++)
                                            <?php $partido = $partidos[$i] ?>
                                                <tr>
                                                    <td><label for="equipo_local">{{ $partido->equipo_local }}</label> <input type="text" id="equipo_local" name="variable[{{$i}}][equipo_local]" value="{{ old('equipo_local')  }}"></td>
                                                    <td><label for="equipo_visitante">{{ $partido->equipo_visitante }}</label> <input type="text" id="equipo_visitante" name="variable[{{$i}}][equipo_visitante]" value=" {{ old('equipo_visitante') }}"></td>
                                                    <td><input type="hidden" id="id_partido" value="{{ $partido->id }}" name="variable[{{$i}}][id_partido]"></td>
                                                </tr>
                                        @endfor

                                            <tr>
                                                <td><input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit"></td>
                                            </tr>
                                    </table>
                                </form>

                                @if (session('message'))
                                    <div class="alert alert-warning">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            @endif

                            @if(count($resultadoarray) > 1)
                                <table>
                                    @for ($i = 1; $i < count($partidos); $i++)
                                       <?php $partido = $partidos[$i-1]; ?>
                                        <tr>
                                            <td>{{ $partido->equipo_local }}</td>
                                            <td>{{ $resultadoarray[$i+1]['goles_local'] }}</td>
                                            <td>{{ $partido->equipo_visitante }}</td>
                                            <td>{{ $resultadoarray[$i+1]['goles_visitante'] }}</td>
                                    @endfor
                                </table>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection