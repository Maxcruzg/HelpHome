<br>
<div class="row justify-content-center">
    <div class="col-12 col-md-8 bg-white border-top text-center text-md-left p-3">
        <div class="row mb-3">
            <div class="col-12 mt-3">
                <h4 class="text-center">Datos de la cita</h4>
                <table class="table table-striped text-left">
                    <tbody>
                        <tr>
                            <th>Fecha Cita</th>
                            <td><?= $cita->fecha_cita ?></td>
                        </tr>
                        <tr>
                            <th>Correo Cliente</th>
                            <td><?= $cita->client_email ?></td>
                        </tr>
                        <tr>
                            <th>Teléfono Cliente</th>
                            <td><?= $cita->client_phone ?></td>
                        </tr>
                        <tr>
                            <th>Dirección</th>
                            <td><?= $cita->client_direction ?></td>
                        </tr>
                        <tr>
                            <th>Problema</th>
                            <td><?= $cita->description ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="col-md-12 text-center">
                    <strong>
                        <th>Comentarios</th>
                    </strong>
                </div>
                <div class="col-md-12">
                    <td><?= $cita->comentarios ?></td>
                </div>
            </div>
        </div>
    </div>
</div>