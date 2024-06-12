<div class="container">
    <h1 class="color-h2" style="text-align:center;">Actualiza tus Datos</h1>
    <div class="container">

        <div class="row ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->create($user) ?>
                        <div class="form-group">
                            <?= $this->Form->control('name', [
                                'label' => 'Nombre',
                                'placeholder' => 'Juancho',
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('surname', [
                                'label' => 'Apellido',
                                'placeholder' => 'Perez',
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', [
                                'label' => 'Email',
                                'placeholder' => 'Ingrese su email',
                                'class' => 'email form-control',
                                'required' => true
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('phone', [
                                'label' => 'Teléfono',
                                'placeholder' => '912345678',
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <!-- <div class="form-group">
                            <?= $this->Form->control('is_profesional', [
                                'label' => '¿Te gustaría trabajar con nosotros?',
                                'options' => $isprofesional,
                                'empty' => 'Seleccione',
                                'class' => 'form-control',
                                'required' => true,
                                'onchange' => 'mostrarCamposAdicionales(this.value)'
                            ]); ?>
                        </div> -->
                    </div>
                    <div class="col-md-6"> <!-- Cambiado a col-md-4 -->
                        <div class="form-group">
                            <?= $this->Form->control('region_id', [
                                'label' => 'Region',
                                'empty' => 'Seleccione una Región',
                                'class' => 'selectpicker form-control',
                                'options' => $regions
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('comuna_id', [
                                'label' => 'Comuna',
                                'empty' => 'Seleccione una Comuna',
                                'class' => 'selectpicker form-control',
                                'options' => $comunas
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('provincia_id', [
                                'label' => 'Comuna',
                                'empty' => 'Seleccione una provincia',
                                'class' => 'selectpicker form-control',
                                'options' => $provincias
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('password', [
                                'label' => 'Ingrese una contraseña',
                                'placeholder' => '************',
                                'class' => 'form-control',
                                'type' => 'password',
                                'required' => true
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('confirm_password', [
                                'label' => 'Repita su contraseña una contraseña',
                                'placeholder' => '************',
                                'class' => 'form-control',
                                'type' => 'password',
                                'required' => true
                            ]); ?>
                        </div>
                        <!-- <div id="camposAdicionales" style="display: none;">
                            <div class="form-group">
                                <?= $this->Form->control('role_id', [
                                    'label' => 'Seleccione su profesión',
                                    'empty' => 'seleccione',
                                    'class' => 'form-control',
                                    'options' => $roles
                                ]); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('archive', [
                                    'type' => 'file',
                                    'label' => 'Subir imagen',
                                    'class' => 'form-control'
                                ]); ?>
                            </div>
                        </div> -->
                    </div>
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
<style>
    .container {
        margin-top: 50px;
        margin-bottom: 30px;
    }

    .registro {
        margin: auto !important;
        height: auto !important;
        width: auto !important;
        padding: 80px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        background-color: white !important;
    }

    body {
        background-color: whitesmoke !important;
    }
</style>
<script>
    function mostrarCamposAdicionales(value) {
        var camposAdicionales = document.getElementById('camposAdicionales');
        if (value === '1') {
            camposAdicionales.style.display = 'block';
        } else {
            camposAdicionales.style.display = 'none';
        }
    }
</script>