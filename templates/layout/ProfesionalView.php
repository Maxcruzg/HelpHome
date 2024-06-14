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
    <?= $this->Html->css('login') ?>

</head>
<?php $user = $this->request->getAttribute('identity'); ?>

<body>
    <?php if ($user) : ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img style="height: 90px; width: 100px;" src="/img/logo.png" alt="">
            </a>
            <?php $currentUrl = ""; ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <!-- Opciones de menú aquí -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php if ($user->is_profesional == 0) : ?>
                        <?= $this->Html->link(
                            '<button type="button" class="btn btn-offer"><i class="far fa-circle nav-icon"></i> Ofrecer Servicios</button>',
                            ['controller' => 'Profesional', 'action' => 'add'],
                            ['class' => 'nav-link', 'escape' => false]
                        ) ?>
                    <?php endif ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Profesionales',
                        ['controller' => 'Users', 'action' => 'lookinProfesional'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Inicio',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                    <?php if ($user->is_profesional == 1) : ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-circle nav-icon"></i> <?= ucfirst($user->name) . ' ' . ucfirst($user->surname) ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <?= $this->Html->link(
                                    __('Profesional'),
                                    ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index'],
                                    ['class' => 'dropdown-item']
                                ) ?>
                                <div class="dropdown-divider"></div>
                                <?= $this->Html->link(
                                    __('Cerrar sesión'),
                                    ['controller' => 'Users', 'action' => 'logout'],
                                    ['class' => 'dropdown-item']
                                ) ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-circle nav-icon"></i> <?= ucfirst($user->name) . ' ' . ucfirst($user->surname) ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <?= $this->Html->link(
                                    __('Editar usuario'),
                                    ['controller' => 'Users', 'action' => 'edit'],
                                    ['class' => 'dropdown-item']
                                ) ?>
                                <div class="dropdown-divider"></div>
                                <?= $this->Html->link(
                                    __('Cerrar sesión'),
                                    ['controller' => 'Users', 'action' => 'logout'],
                                    ['class' => 'dropdown-item']
                                ) ?>
                            </div>
                        </div>
                    <?php endif ?>
                </form>
            </div>
        </nav>
    <?php else : ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img style="height: 90px; width: 100px;" src="/img/logo.png" alt="">
            </a>
            <?php $currentUrl = ""; ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Inicio',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Profesionales',
                        ['controller' => 'users', 'action' => 'lookinProfesional'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Sign Up',
                        ['controller' => 'Users', 'action' => 'login'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<button type="button" class="btn btn-offer"><i class="far fa-circle nav-icon"></i> Ofrecer Servicios</button>',
                        ['controller' => 'Profesional', 'action' => 'add'],
                        ['class' => 'nav-link', 'escape' => false]
                    ) ?>
                </form>
            </div>
        </nav>
    <?php endif ?>
</body>


<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
</body>

</html>



<style>
    .navbar {
        height: 100px;
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

    .dropdown-item a {
        color: #fff;
        text-decoration: none;
        background-color: rgb(230, 144, 32) !important;
    }

    .dropdown-item a:hover {
        background-color: rgb(205, 129, 29) !important;
    }
</style>