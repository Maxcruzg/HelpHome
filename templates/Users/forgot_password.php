<div class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?= $this->Form->create() ?>
    <div class="form-group">
        <strong>
            <p>Ingresa tu correo para recibir tu token</p>
        </strong>
        <?= $this->Form->control('email', [
            'placeholder' => 'Ingrese su email',
            'class' => 'form-control float-right',
            'required' => true,
            'label' => 'Email'
        ]);
        ?>
    </div>
    <br>
    <div style="margin-top: 20px;" class="boton-principal">
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'resetPassword']) ?>">¿Aun no te registras? Pincha Aquí</a>
        <?= $this->Form->button('Enviar Solicitud', [
            'type' => 'submit',
            'class' => 'btn btn-success',
            'style' => 'margin-top: 5%; margin-bottom:5%;'
        ]) ?>
        <?= $this->Form->end() ?>
    </div>
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