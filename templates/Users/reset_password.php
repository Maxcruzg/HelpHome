<div style="text-align:center;" class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'resetPassword']]) ?>
    <div class="form-group">
        <strong>
            <p>RESTABLECER CONTRASEÑA</p>
        </strong>
        <div class="form-group">
            <?= $this->Form->control('token', [
                'type' => 'text',
                'label' => 'Ingresa el token recibido por correo',
                'placeholder' => 'Token de seguridad (ej. abc123)',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('new_password', [
                'type' => 'password',
                'label' => 'Nueva contraseña',
                'placeholder' => '*************',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('confirm_password', [
                'type' => 'password',
                'label' => 'Confirmar contraseña',
                'placeholder' => '*************',
                'class' => 'form-control'
            ]) ?>
        </div>
        <?= $this->Form->button('RESTABLECER', [
            'class' => 'btn btn-lg'
        ]) ?>
    </div>
    <?= $this->Form->end() ?>
    <br>
</div>