<div class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?= $this->Form->create() ?>
    <div class="form-group">
        <strong>
            <p style = "text-align:center">Ingresa tu correo para recibir tu token</p>
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
        <?= $this->Form->button('ENVIAR SOLICITUD', [
            'type' => 'submit',
            'class' => 'btn btn-lg',
            'style' => 'margin-top: 5%; margin-bottom:5%;'
        ]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
