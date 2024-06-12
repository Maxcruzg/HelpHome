<script src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>

<div class="row">
    <h3>Citas Aprobadas</h3>
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
                <?php if($cita->estado == 1):  ?>
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
                        }
                        ?>
                    </td>
                    <td class="actions">
                        <?= $this->Form->postLink(
                            '<i class="fa-solid icon fa-play"></i>',
                            ['controller' => 'Citas', 'action' => 'iniciar', $cita->id],
                            ['escapeTitle' => false, 'title' => 'iniciar']
                        ) ?>
                        <?= $this->Html->link(
                            '<i class="fa-solid icon fa-circle-xmark"></i>',
                            ['controller' => 'Citas', 'action' => 'rechazar', $cita->id],
                            ['escape' => false, 'title' => 'Rechazar']
                        ) ?>
                    </td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
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
        color: black !important;
    }
</style>