<br><br><br>
<div class="container">
    <h1 style="text-align:center;font-size: 60px;font-weight: bold;"> Buscar Maestros</h1>
    <br><br><br>
    <div class=" col-md-12">
        <?= $this->Form->create(null, ['method' => 'get']); ?>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('region_id', [
                    'class' => 'form-control form-control-lg',
                    'type' => 'select',
                    'options' => $regions,
                    'empty' => 'Seleccione una Región',
                    'value' => $this->request->getQuery('region_id')
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('especialidad_id', [
                    'class' => 'form-control form-control-lg',
                    'type' => 'select',
                    'options' => $especialidades,
                    'empty' => 'Seleccione una Especialidad',
                    'value' => $this->request->getQuery('especialidad_id')
                ]) ?>
            </div>
            <?= $this->Form->submit('Filtrar', ['class' => 'btn', 'style' => 'background-color: #D9A70A; color: white;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <?php foreach ($users as $user) : ?>
            <?php foreach ($user->profesional as $profesional) : ?>
                <div class="col-md-3">
                    <div class="card profesional" style="width: 18rem;">
                        <?php echo $this->Html->image('/img/image/' . $profesional->path, ['class' => 'card-img-top']); ?> <div class="card-body">
                        <h5 class="card-title"><?= h(ucwords(strtolower($user->name)) . ' ' . ucwords(strtolower($user->surname))) ?></h5>
                        <p class="card-text"><?= h(ucwords(strtolower($profesional->especialidad->name))) ?></p>
                        <p class="card-region"><?= h($user->region->regiones) . ' (' . h($user->comuna->comuna) . ')' ?></p>
                        <p class="card-region"><?= h(ucwords(strtolower($profesional->experiencia))) ?></p>
                        <p class="card-region"><strong>Valor Consulta:</strong> <?= '$ ' . number_format($profesional->value, 0, ',', '.') ?></p>
                            <div class="ver">
                            <?= $this->Html->link(__('Ver Perfil'), ['controller' => 'Profesional', 'action' => 'view', $profesional->id], ['class' => 'side-nav-item', 'style' => 'text-transform: lowercase !important;']) ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endforeach ?>
    </div>
</div>

<div class="paginator text-center">
    <ul class="pagination justify-content-center">
        <li class="page-item"><?= $this->Paginator->first('<< ' . __('Primera')) ?></li>
        <li class="page-item"><?= $this->Paginator->prev('< ' . __('Anterior')) ?></li>
        <li class="page-item"><?= $this->Paginator->numbers() ?></li>
        <li class="page-item"><?= $this->Paginator->next(__('Siguiente') . ' >') ?></li>
        <li class="page-item"><?= $this->Paginator->last(__('Última') . ' >>') ?></li>
    </ul>
    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
</div>



<style>
    .form-control-lg {
        border-bottom: 1px solid black;
        border-radius: 0%;
        border-top: none;
        border-left: none;
        border-right: none;
        background: white;
        width: 210px !important;
        color: black !important;
        font-size: 14px !important;
        outline: none;

    }

    .form-control-lg:focus {
        border-bottom: 1px solid black;
        border-radius: 0%;
        border-top: none;
        border-left: none;
        border-right: none;
        background: white;
        width: 210px !important;
        color: black !important;
        font-size: 14px !important;
        outline: none;
        box-shadow: none;
        /* Eliminar la sombra */

    }





    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1510px;
        }
    }

    .medium {
        border-bottom: 1px solid #80808038;

    }

    .profesional {
        border-radius: 42px;
        padding: 0px 0px 0px;
        background-color: #DAFFF763;

    }

    .card-img-top {
        border-top-left-radius: 42px;
        border-top-right-radius: 42px;
        height: 200px;
        border-bottom: 1px solid #ccc !important;


    }

    .h5,
    h5 {
        font-size: 18px;
    }

    .card-text {
        font-size: 13px;
        font-weight: bold;

    }

    .card-region {
        font-size: 10px;
    }

    .card-title {
        margin-bottom: 1px;
        font-weight: bold;
    }

    p {
        margin-top: 0px;
        margin-bottom: 0rem;
    }

    .ver {
        text-align: center !important;
        margin-top: 10px;
        padding: 4px;
        max-width: 100px;
        border-radius: 16px;
        background-color: #647D87;
        margin-left: auto;
        margin-right: auto;
        text-transform: lowercase !important;


    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    label[for="region-id"] {
        display: none;
    }

    label[for="especialidad-id"] {
        display: none;
    }

    .ver a:hover {
        background-color: transparent !important;
        /* Hace que el fondo sea transparente al hacer clic */
    }
</style>