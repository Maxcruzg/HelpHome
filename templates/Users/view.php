<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Utilizar solo la última versión de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- <div class="row">
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($user->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= $user->has('region') ? $this->Html->link($user->region->regiones, ['controller' => 'Regions', 'action' => 'view', $user->region->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comuna') ?></th>
                    <td><?= $user->has('comuna') ? $this->Html->link($user->comuna->comuna, ['controller' => 'Comunas', 'action' => 'view', $user->comuna->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <td><?= $user->has('provincia') ? $this->Html->link($user->provincia->provincia, ['controller' => 'Provincias', 'action' => 'view', $user->provincia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Califications') ?></h4>
                <?php if (!empty($user->califications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Calificacion') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Fecha Calificacion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->califications as $califications) : ?>
                        <tr>
                            <td><?= h($califications->id) ?></td>
                            <td><?= h($califications->service_id) ?></td>
                            <td><?= h($califications->profesional_id) ?></td>
                            <td><?= h($califications->user_id) ?></td>
                            <td><?= h($califications->calificacion) ?></td>
                            <td><?= h($califications->comentarios) ?></td>
                            <td><?= h($califications->fecha_calificacion) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Califications', 'action' => 'view', $califications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Califications', 'action' => 'edit', $califications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Califications', 'action' => 'delete', $califications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $califications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Citas') ?></h4>
                <?php if (!empty($user->citas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('Fecha Inicio') ?></th>
                            <th><?= __('Fecha Termino') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->citas as $citas) : ?>
                        <tr>
                            <td><?= h($citas->id) ?></td>
                            <td><?= h($citas->user_id) ?></td>
                            <td><?= h($citas->profesional_id) ?></td>
                            <td><?= h($citas->fecha_inicio) ?></td>
                            <td><?= h($citas->fecha_termino) ?></td>
                            <td><?= h($citas->estado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Citas', 'action' => 'view', $citas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Citas', 'action' => 'edit', $citas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Citas', 'action' => 'delete', $citas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $citas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Service History') ?></h4>
                <?php if (!empty($user->historial_servicio)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Fecha Servicio') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Observaciones') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->service_history as $serviceHistory) : ?>
                        <tr>
                            <td><?= h($serviceHistory->id) ?></td>
                            <td><?= h($serviceHistory->user_id) ?></td>
                            <td><?= h($serviceHistory->profesional_id) ?></td>
                            <td><?= h($serviceHistory->service_id) ?></td>
                            <td><?= h($serviceHistory->fecha_servicio) ?></td>
                            <td><?= h($serviceHistory->descripcion) ?></td>
                            <td><?= h($serviceHistory->Observaciones) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ServiceHistory', 'action' => 'view', $serviceHistory->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ServiceHistory', 'action' => 'edit', $serviceHistory->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServiceHistory', 'action' => 'delete', $serviceHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceHistory->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div> -->
<br><br><br><br>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <img style="margin-left: -23px; max-width: 450px; height: 400px; border-radius: 50px;" src="/img/pintura.jpg" alt="">
            </div>
            <div style="margin-top: 50px;" class="col-md-5">
                <table>
                    <tr>
                        <h1><?= $user->name ?></h1>
                    </tr>
                    <tr>
                        <h2>
                            <strong>Especialidad: </strong><?= h($user->profesional->value) ?>
                        </h2>
                    </tr>
                    <tr>
                        <td><strong>Teléfono: </strong><?= '+56' . substr($user->phone, 0, 1) . ' ' . substr($user->phone, 1, 4) . '  ' . substr($user->phone, 5) ?></td>
                    </tr>
                    <tr>
                        <td> <strong>Comuna: </strong> <?= $user->comuna->comuna  ?></td>
                    </tr>
                </table>
                <br>
                <div class="row">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="comentarios">
                        <i class="fa-regular fa-message"> Comentarios</i>

                    </div>
                    <div class="tratos">
                        <i class="fa-regular fa-handshake"></i>
                    </div>
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <?= $this->Form->submit('Contratar', [
                            'class' => 'btn',
                            'style' => 'background-color: gray; color: white; font-size: 20px;background-color: gray;
                            color: white;
                            font-size: 35px;
                            height: 65px;
                            margin-top: -17px;
                            border-radius: 20px;  
                            width: 260px;'
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="historial">
        <div class="col-md-12">
            <h2>Trabajos Realizados</h2>
        </div>
    </div>
</div>

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
        padding: 4px;
        margin-right: 10px;
        /* Espacio entre los elementos */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 32px;
        font-weight: bold;
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
</style>