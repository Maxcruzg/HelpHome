<div class="container">
    <h1 class="color-h2 text-center">¡Regístrate con nosotros!</h1>
    <div class="text-center">
        <p>¿Eres una persona con experiencia y quieres registrarte para ser contratado?</p>
        <a href="#">Regístrate aquí para que te conozcan</a>
    </div>
    <?= $this->Form->create($user) ?>
    <div class="row">
        <div class="col-md-6">
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
                    'class' => 'form-control',
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
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= $this->Form->control('region_id', [
                    'label' => 'Región',
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
                    'label' => 'Provincia',
                    'empty' => 'Seleccione una Provincia',
                    'class' => 'selectpicker form-control',
                    'options' => $provincias
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('password', [
                    'label' => 'Contraseña',
                    'placeholder' => '************',
                    'class' => 'form-control',
                    'type' => 'password',
                    'required' => true
                ]); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('confirm_password', [
                    'label' => 'Confirmar Contraseña',
                    'placeholder' => '************',
                    'class' => 'form-control',
                    'type' => 'password',
                    'required' => true
                ]); ?>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <?= $this->Form->button('REGISTRARSE', [
            'type' => 'submit',
            'class' => 'btn btn-lg',
            'style' => 'font-weight: bold;'
        ]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
