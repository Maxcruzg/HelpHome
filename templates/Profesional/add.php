<div class="container">
    <h1 class="color-h2" style="text-align:center;">Antes de comenzar, ¡debes registrarte con nosotros!</h1>
    <strong>
        <p style="text-align:center;">Completa este formulario para poder registrarte como profesional y poder recibir citas</p>
    </strong>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <?= $this->Form->create($profesional, ['type' => 'file']) ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?= $this->Form->control('especialidad_id', [
                                            'label' => 'Especialidad',
                                            'empty' => 'Seleccione su especialidad',
                                            'class' => 'form-control',
                                            'options' => $especialidad
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?= $this->Form->control('value', [
                                            'type' => 'text',
                                            'label' => 'Valor aroximado',
                                            'placeholder' => '',
                                            'class' => 'form-control',
                                        ]); ?>
                                        <strong>
                                            <p class="info">(***)por lo general este valor se usa para que la gente tenga una estimacion de cuanto saldra la consulta o si esta dentro de su rango de precio(el valor se puede modificar mas adelante)</p>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->file('path', [
                                'type' => 'file',
                                'label' => 'Ingrese una imagen para visualizar en su perfil',
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('experiencia', [
                                'type' => 'textarea',
                                'label' => 'Escriba una pequeña descripción que saldrá dentro de su perfil',
                                'placeholder' => '',
                                'class' => 'form-control',
                                'style' => 'height: 150px;'
                            ]); ?>
                        </div>
                        <div class="col-md-2 boton-registro">
                            <?= $this->Form->button('Registrarse', [
                                'type' => 'submit',
                                'class' => 'btn btn-primary'
                            ]) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    .container {
        margin-top: 50px;
        margin-bottom: 30px;
        justify-items: center !important;
        justify-content: center !important;
    }

    .info {
        font-size: 9px;
    }
</style>