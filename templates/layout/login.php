<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <?= $this->Html->css('login') ?>

</head>

<?php $user = $this->request->getAttribute('identity'); ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">

        </a> <?php $currentUrl = ""; ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <?= $this->Html->link(
                    '<button type="button" class="btn btn-offer"><i class="far fa-circle nav-icon"></i> Ofrecer Servicios</button>',
                    ['controller' => 'Profesional', 'action' => 'add'],
                    ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                ) ?>
                <?= $this->Html->link(
                    '<i class="far fa-circle nav-icon"></i> Inicio',
                    ['controller' => 'Users', 'action' => 'index'],
                    ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                ) ?>
            </form>
        </div>
    </nav>

    <div class="overlay">

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</body>

</html>



<style>
    html,
    body {

        background-image: url("/img/fondo.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Montserrat', sans-serif !important;


    }


    .card-container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 123px;
        padding: 20px;
        background-color: #d79d14d1;
        border-radius: 10px;
        box-shadow: 24px 18px 7px -12px rgba(0, 0, 0, 0.53);
        margin-top: 50px;
        color: white !important;
    }

    .card-container.card {
        max-width: 420px;
        padding: 40px 40px;
    }

    .boton-principal {
        text-align: center;
        margin-top: 20px;
    }

    .navbar {
        height: 100px;
        background-color: #0000009E !important;
        box-shadow: 73px 5px 38px black;
        text-transform: uppercase !important;
        font-weight: bolder;
    }

    footer {
        border-top: px solid white;
        height: 400px;
        padding: 20px !important;
    }

    .logo-footer {
        height: 120px !important;
        width: auto !important;
        margin-top: 20px;
    }

    a {
        color: white !important;
    }

    .contacto-footer {
        color: white;
    }

    .text-muted {
        color: #e8ecf0 !important;
    }

    .btn-offer {
        background-color: whitesmoke;
        color: black !important;
    }

    label {
        display: inline-block;
        margin-bottom: .5rem;
        font-weight: bold;
    }
</style>