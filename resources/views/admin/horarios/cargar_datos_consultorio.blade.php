 <div class="card-body">

        <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>LUNES</th>
                    <th>MARTES</th>
                    <th>MIERCOLES</th>
                    <th>JUEVES</th>
                    <th>VIERNES</th>
                    <th>SABADO</th>
                    <th>DOMINGO</th>
                   

                </tr>

            </thead>
            <tbody>
            @php
    $horas = [
        '08:00:00 - 09:00:00','09:00:00 - 10:00:00','10:00:00 - 11:00:00',
        '11:00:00 - 12:00:00','12:00:00 - 13:00:00','13:00:00 - 14:00:00',
        '14:00:00 - 15:00:00','15:00:00 - 16:00:00','16:00:00 - 17:00:00',
        '17:00:00 - 18:00:00','18:00:00 - 19:00:00','19:00:00 - 20:00:00',
        '20:00:00 - 21:00:00','21:00:00 - 22:00:00','22:00:00 - 23:00:00'
    ];

    $diasSemana = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
@endphp

@foreach($horas as $hora)
    @php
        list($hora_inicio, $hora_fin) = explode(' - ', $hora);
        $hora_inicio_ts = strtotime($hora_inicio);
        $hora_fin_ts = strtotime($hora_fin);
    @endphp

    <tr>
        <td>{{ $hora }}</td>
        @foreach($diasSemana as $dia)
            @php
                $nombre_doctor = '';

                foreach ($horarios as $horario) {
                    $dia_horario = strtoupper($horario->dia);
                    $horario_inicio_ts = strtotime($horario->hora_inicio);
                    $horario_fin_ts = strtotime($horario->hora_fin);

                    if ($dia_horario == $dia &&
                            $hora_inicio_ts < $horario_fin_ts &&
                                        $hora_fin_ts > $horario_inicio_ts)
                            {

                        $nombre_doctor = $horario->medico->nombre . ' ' . $horario->medico->apellidos;
                        break;
                    }
                }
            @endphp
            <td>{{ $nombre_doctor }}</td>
        @endforeach
    </tr>
@endforeach

            </tbody>
        </table>
        </div>