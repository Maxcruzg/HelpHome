<div class="row">
    <h3>Citas Pendientes</h3>
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
                <?php if ($cita->estado != 4 && $cita->estado != 2) :  ?>

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
                            <?php if ($cita->estado == 0) : ?>
                                <?= $this->Form->postLink(
                                    '<i class="fa-solid icon fa-check-to-slot"></i>',
                                    ['controller' => 'Citas', 'action' => 'aprobar', $cita->id],
                                    ['escapeTitle' => false, 'title' => 'Aprobar']
                                ) ?>
                            <?php elseif ($cita->estado == 1) : ?>
                                <?= $this->Form->postLink(
                                    '<i class="fa-solid icon fa-play"></i>',
                                    ['controller' => 'Citas', 'action' => 'iniciar', $cita->id],
                                    ['escapeTitle' => false, 'title' => 'Iniciar']
                                ) ?>
                            <?php elseif ($cita->estado == 3) : ?>
                                <?= $this->Form->postLink(
                                    '<i class="fa-solid icon fa-stop"></i>',
                                    ['controller' => 'Citas', 'action' => 'finalizar', $cita->id],
                                    ['escapeTitle' => false, 'title' => 'Finalizar']
                                ) ?>
                            <?php endif; ?>
                            <?php if ($cita->estado == 0) : ?>
                                <?= $this->Html->link(
                                    '<i class="fa-solid icon fa-circle-xmark"></i>',
                                    ['controller' => 'Citas', 'action' => 'rechazar', $cita->id],
                                    ['escape' => false, 'title' => 'Rechazar']
                                ) ?>
                            <?php endif; ?>
                            <button class="openModalBtn" data-cita-id="<?= $cita->id ?>">Abrir Modal</button>
                    </tr>
                <?php endif;  ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <!-- Botón para cerrar el modal -->
        <span class="close">&times;</span>
        <!-- Contenido de la cita que se cargará mediante Ajax -->
        <div id="modalContent"></div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Cuando se hace clic en un botón para abrir el modal
        $(".openModalBtn").click(function() {
            // Obtener el ID de la cita desde el atributo de datos del botón
            var citaId = $(this).data("cita-id");
            // Hacer una solicitud Ajax para obtener los datos de la cita
            $.ajax({
                url: "CitasController/view?id=" + citaId,
                method: "GET",
                success: function(response) {
                    console.log(response); // Verifica los datos de la cita en la consola
                    $("#modalContent").html(response);
                    $("#myModal").modal("show");
                },
                error: function() {
                    console.error('Error al cargar los datos de la cita');
                }
            });
        });

        // Cuando se haga clic en la 'x' (cerrar), cerrar el modal
        $(".close").click(function() {
            $("#myModal").modal("hide");
        });

        // Cuando se haga clic fuera del modal, cerrarlo
        $(window).click(function(event) {
            if (event.target == $("#myModal")[0]) {
                $("#myModal").modal("hide");
            }
        });
    });
</script>

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