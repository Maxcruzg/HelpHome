<div class="card card-container">
  <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
  <p id="profile-name" class="profile-name-card"></p>
  <?= $this->Form->create() ?>
  <div class="form-group">
    <p>Debes Iniciar sesión para comenzar</p>
    <?= $this->Form->control('email', [
      'placeholder' => 'Ingrese su email',
      'class' => 'form-control float-right',
      'required' => true,
      'label' => 'Email'
    ]);
    ?>
  </div>
  <br>
  <div style="margin-top:5px;" class="form-group">
    <?= $this->Form->control('password', [
      'placeholder' => 'Ingrese su contraseña',
      'class' => 'password form-control float-right',
      'required' => true,
      'label' => 'Contraseña'
    ]);
    ?>
  </div>
  <div class="boton-principal">
    <div style="margin-top:20% !important;">
    <a style="color: blue;" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgotPassword']) ?>">¿Olvidaste tu contraseña?</a>
    </div>
    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'register']) ?>">¿Aun no te registras? Pincha Aquí</a>

    <?= $this->Form->button('Iniciar Sesión', [
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

