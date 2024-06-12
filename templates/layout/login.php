<?php

$cakeDescription = 'HelpHome - Profesionales a tu alcance';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <?= $this->Html->css('login') ?>

</head>

<?php $user = $this->request->getAttribute('identity'); ?>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark">
                <img style="height: 70px; width:100px;" src="/img/logo.png" alt="">
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


    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</body>

</html>



<style>
    .navbar {
        height: 80px;
        background-color: #D9A70A !important;

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

    .dropdown-menu.show {
        background-color: #D9A70A !important;
    }
</style>

