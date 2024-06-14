<div class="row">
    <h3>Historial de Citas</h3>
    <table class="table citas">
        <thead>
            <tr>
                <th scope="col">Nº Cita</th>
                <th scope="col">Cliente</th>
                <th scope="col">Dirección</th>
                <th scope="col">fecha Cita</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citas as $cita) : ?>
                <?php if ($cita->estado == 4 || $cita->estado == 2) :  ?>
                    <tr>
                        <td><?= $cita->id ?></td>
                        <td><?= $cita->user->name . ' ' . $cita->user->name  ?></td>
                        <td><?= $cita->client_direction ?></td>
                        <td><?= h((new DateTime($cita->fecha_cita))->format('Y-m-d')) ?></td>
                        <td>
                            <?php
                            if ($cita->estado == 0) {
                                echo 'Pendiente';
                            } elseif ($cita->estado == 1) {
                                echo 'Aprobada';
                            } elseif ($cita->estado == 2) {
                                echo 'Rechazada';
                            } elseif ($cita->estado == 3) {
                                echo 'Iniciada';
                            } elseif ($cita->estado == 4) {
                                echo 'Finalizada';
                            }
                            ?>
                        </td>
                        <td class="actions">
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal<?= $cita->id ?>" title="Ver Cita">
                                <i class="fa-solid icon fa-eye"></i>
                            </button>

                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php foreach ($citas as $cita) : ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?= $cita->id ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos de la Cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Monto</th>
                                <td><?= '$ ' . number_format($cita->value, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha Cita</th>
                                <td><?= $cita->fecha_cita ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Correo Cliente</th>
                                <td><?= $cita->client_email ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Teléfono Cliente</th>
                                <td><?= $cita->client_phone ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dirección</th>
                                <td><?= $cita->client_direction ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Problema</th>
                                <td><?= $cita->description ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Comentarios</th>
                                <td><?= $cita->comentarios ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<style>
    .citas {
        margin-left: 50px;
        margin-right: 50px;
    }

    h3 {
        margin-top: 50px;
        margin-left: 50px;
    }

    .icon {
        background-color: red;
        color: white !important;
        padding: 4px;
        margin-left: 3px;
        margin-top: auto;
        border-radius: 5px;
        width: 17px;
    }
</style>