<div style= "text-align:center "class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?= $this->Form->create() ?>
    <div class="form-group">
        <strong>
            <p>Restablecer contraseña</p>
        </strong>
        <?= $this->Form->create() ?>
        <div class="form-group">
            <?= $this->Form->control('token', ['type' => 'text', 'label' => 'Ingrese el token', 'value' => '', 'placeholder' => '1a2b3c']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('new_password', ['type' => 'password', 'label' => 'Nueva contraseña']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('confirm_password', ['type' => 'password', 'label' => 'Confirmar contraseña']) ?>
        </div>
        <?= $this->Form->button('Restablecer contraseña', ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>   
    </div>
    <br>
</div>
<style>
    .boton-principal {
        text-align: center;
    }

    .boton-principal a {
        color: blue !important;
    }

    body {
        font-size: 14px !important;
        background-color: transparent !important;
    }
</style>