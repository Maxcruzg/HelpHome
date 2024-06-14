<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br><br><br><br>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <?= $this->Html->image('/img/image/' . $profesional->path, ['style' => 'margin-left: -23px; max-width: 397px; height: 400px; border-radius: 50px']); ?>
            </div>
            <div style="margin-top: 50px;" class="col-md-5">
                <table>
                    <tr>
                        <td>
                            <h1><?= ucfirst(h($profesional->user->name)) . ' ' . ucfirst(h($profesional->user->surname)) ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4><?= ucfirst(h($profesional->especialidad->name)) ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Teléfono: </strong><?= '+56' . substr($profesional->user->phone, 0, 1) . ' ' . substr($profesional->user->phone, 1, 4) . '  ' . substr($profesional->user->phone, 5) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Region: </strong> <?= h($profesional->user->region->regiones) . ' (' . h($profesional->user->comuna->comuna) . ')' ?></td>
                    </tr>
                    <div class="row">
                        <td><strong>Informacion adicional:</td>
                    </div>
                </table>
                <th></strong> <?= $profesional->experiencia ?></th>
                <br>
                <br>
                <div class="row">
                    <div class="stars">
                        <?php if ($averageRating > 0) : ?>
                            <?php $maxStars = 5; ?>
                            <?php for ($i = 1; $i <= $maxStars; $i++) : ?>
                                <?php if ($i <= $averageRating) : ?>
                                    <span class="fa fa-star checked"></span>
                                <?php elseif ($averageRating > $i - 1 && $averageRating < $i) : ?>
                                    <span class="fa fa-star-half-o checked"></span>
                                <?php endif; ?>
                            <?php endfor; ?>
                        <?php else : ?>

                           Sin Valoraciones
                        
                        <?php endif; ?>
                    </div>

                    <div style="color:white;" class="tratos">
                        <?= 'Citas Completadas : ' . $getCountCitas ?>
                    </div>
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hireModal" style="background-color: gray; color: white; font-size: 20px; height: 65px; margin-top: -17px; border-radius: 20px; width: 260px;">
                             <strong>
                             AGENDAR
                             </strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="historial">
        <div class="col-md-12">
            <h2>Comentarios</h2>
        </div>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="hireModal" tabindex="-1" role="dialog" aria-labelledby="hireModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="hireModalLabel">Agendar una cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agendar la cita -->
                <?php $user = $this->request->getAttribute('identity'); ?>
                <?= $this->Form->create(null, [
                    'url' => ['controller' => 'citas', 'action' => 'hireAppointment'],
                    'id' => 'hireForm',
                    'onsubmit' => 'submitContactForm(event)'
                ]) ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $this->Form->control('client_direction', [
                                    'label' => 'Ingrese la dirección',
                                    'placeholder' => 'calle ejemplo 0102',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 11px;',
                                    'required',
                                    'id' => 'inputDirection'
                                ]); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('client_phone', [
                                    'label' => 'Teléfono del cliente',
                                    'value' => $user->phone,
                                    'class' => 'form-control',
                                    'style' => 'font-size: 11px;',
                                    'required',
                                    'id' => 'inputPhone'
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $this->Form->control('fecha_cita', [
                                    'label' => 'Fecha de la cita',
                                    'class' => 'form-control',
                                    'type' => 'text',
                                    'id' => 'datepicker',
                                    'style' => 'font-size: 11px;',
                                    'required',
                                ]); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('client_email', [
                                    'label' => 'Email del cliente',
                                    'value' => $user->email,
                                    'class' => 'form-control',
                                    'style' => 'font-size: 11px;',
                                    'required',
                                    'id' => 'inputEmail'
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?= $this->Form->control('description', [
                                    'label' => 'Indique la descripción de su problema',
                                    'placeholder' => '',
                                    'class' => 'form-control',
                                    'style' => 'font-size: 11px;',
                                    'required',
                                    'id' => 'inputDescription'
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                    <?= $this->Form->control('comentarios', [
                                        'label' => 'Explique brevemente lo que sucedio',
                                        'type' => 'textarea',
                                        'class' => 'form-control',
                                        'style' => 'font-size: 11px;',
                                        'required',
                                        'id' => 'inputComentario'
                                    ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="background-color:orange; color: white;" class="btn  submitBtn" onclick="submitContactForm">Agendar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                    <?= $this->Form->hidden('user_id', ['value' => $user->id]); ?>
                    <?= $this->Form->hidden('profesional_id', ['value' => $profesional->id]); ?>
                    <?= $this->Form->hidden('estado', ['value' => '0']); ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    function submitContactForm(event) {
        var direccion = $('#inputDirection').val();
        var phone = $('#inputPhone').val();
        var fecha = $('#datepicker').val();
        var email = $('#inputEmail').val();
        var descripcion = $('#inputDescription').val();
        var comentario = $('#inputComentario').val();

        $.ajax({
            type: 'POST',
            url: 'CitasController/hireAppointment',
            data: {
                direccion: direccion,
                phone: phone,
                fecha: fecha,
                email: email,
                descripcion: descripcion,
                comentario: comentario,
            },
            success: function(response) {
                // Código a ejecutar después de que el AJAX sea exitoso
                $('#myModal').modal('hide'); // Cierra el modal
            }
        });
    }

    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '0d',
        autoclose: true,
        todayHighlight: true
    });
</script>
<style>
    h1 {
        font-weight: 1000;
        font-size: 48px;
        line-height: 44px;

    }

    h2 {
        font-weight: 1000;
    }

    .stars,
    .comentarios,
    .tratos {
        color: #69bbbd;
        background-color: #FDDD79 !important;
        border-radius: 10px;
        padding: 5px;
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        font-weight: bold;
        margin-top: 5px;
        /* Altura uniforme para todos los elementos */
    }

    .stars {
        width: auto;
    }

    .row {
        display: flex;
        align-items: center;
        /* Alinea los elementos verticalmente */
    }

    .stars .fa-star {
        color: inherit;
        /* Usa el color heredado */
        background-color: inherit;
        /* Usa el fondo heredado */
        border-radius: inherit;
        /* Usa el borde redondeado heredado */
        padding: 4px;

    }

    .comentarios,
    .tratos {
        color: #69bbbd;
        /* Establece el color de texto en blanco */
        width: auto;
        white-space: nowrap;
        /* Evita que los elementos se desplacen a una nueva línea */
    }

    .far.fa-circle.nav-icon {
        display: none !important;
    }

    .historial {
        margin-top: 90px !important;
    }

    .modal {
        font-weight: bold !important;
        font-size: 9px;
    }

    .datepicker {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .datepicker .datepicker-days .table-condensed thead tr:nth-child(2) {
        background-color: #f8f9fa;
        color: #495057;
    }

    .datepicker .datepicker-days .table-condensed thead tr:nth-child(2) th {
        font-weight: 600;
        font-size: 14px;
    }

    .datepicker .datepicker-days .table-condensed tbody tr td {
        padding: 8px;
        font-size: 14px;
        color: #495057;
    }

    .datepicker .datepicker-days .table-condensed tbody tr td.day:hover {
        background-color: #e9ecef;
        border-radius: 4px;
        cursor: pointer;
    }

    .datepicker .datepicker-days .table-condensed tbody tr td.active,
    .datepicker .datepicker-days .table-condensed tbody tr td.active:hover {
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
    }

    .datepicker .datepicker-days .table-condensed thead tr th.prev,
    .datepicker .datepicker-days .table-condensed thead tr th.next {
        color: #007bff;
        font-size: 18px;
    }

    .datepicker .datepicker-days .table-condensed thead tr th.prev:hover,
    .datepicker .datepicker-days .table-condensed thead tr th.next:hover {
        color: #0056b3;
        cursor: pointer;
    }

    .datepicker .datepicker-days .table-condensed tbody tr td.today {
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
    }

    .datepicker .datepicker-days .table-condensed tbody tr td.disabled,
    .datepicker .datepicker-days .table-condensed tbody tr td.disabled:hover {
        background-color: #e9ecef;
        color: #adb5bd;
        cursor: not-allowed;
    }

    .datepicker .datepicker-months .table-condensed tbody tr td,
    .datepicker .datepicker-years .table-condensed tbody tr td {
        padding: 8px;
        font-size: 14px;
        color: #495057;
    }

    .datepicker .datepicker-months .table-condensed tbody tr td:hover,
    .datepicker .datepicker-years .table-condensed tbody tr td:hover {
        background-color: #e9ecef;
        border-radius: 4px;
        cursor: pointer;
    }

    .datepicker .datepicker-months .table-condensed tbody tr td.active,
    .datepicker .datepicker-years .table-condensed tbody tr td.active {
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
    }
</style>