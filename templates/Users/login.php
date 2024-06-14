<div class="card card-container">
  <img style="height: 200px; width:210; margin: auto;" src="/img/logo.png" alt="">
  <p id="profile-name" class="profile-name-card"></p>

  <?= $this->Form->create() ?>
  <div  style = "text-align:center"class="form-group">
    <strong>
      <p>INICIAR SESIÓN</p>
    </strong>
    <?= $this->Form->control('email', [
      'placeholder' => 'contacto@email.cl',
      'class' => 'form-control float-right',
      'required' => true,
      'label' => 'Email'
    ]) ?>
  </div>

  <div class="form-group">
    <?= $this->Form->control('password', [
      'placeholder' => '********',
      'class' => 'password form-control float-right',
      'required' => true,
      'label' => 'Contraseña'
    ]) ?>
  </div>
  <div class="boton-principal">
    <div style="margin-top: 20% !important;">
      <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgotPassword']) ?>" style="color: white !important;">¿Olvidaste tu contraseña?</a>
    </div>

    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'register']) ?>" style="color: white !important;">¿Aún no te registras? Pincha aquí</a>

    <?= $this->Form->button('INICIAR SESIÓN', [
      'type' => 'submit',
      'class' => 'btn btn-lg',
      'style' => 'margin-top: 5%; margin-bottom: 5%;'
    ]) ?>
  </div>

  <?= $this->Form->end() ?>
</div>