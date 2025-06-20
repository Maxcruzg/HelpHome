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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <?= $this->Html->css('login') ?>
</head>
<?php $user = $this->request->getAttribute('identity'); ?>

<body>
    <?php if ($user) : ?>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <img style="height: 90px;  width: 100px; opacity: 1;" src="/img/logo.png" alt="">
            </a>
            <?php $currentUrl = ""; ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php if ($user->is_profesional  == 0) : ?>
                        <?= $this->Html->link(
                            '<button type="button" class="btn btn-offer"><i class="far fa-circle nav-icon"></i> Ofrecer Servicios</button>',
                            ['controller' => 'Profesional', 'action' => 'add'],
                            ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                        ) ?>
                    <?php endif ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Profesionales',
                        ['controller' => 'users', 'action' => 'lookinProfesional'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'lookinprofesional'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Inicio',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                    <?php if ($user->is_profesional == 1) : ?>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-circle nav-icon"></i> <?= ucwords($user->name) ?> <?= ucwords($user->surname) ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
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
                                <i class="far fa-circle nav-icon"></i> <?= $user->name . ' ' . $user->surname ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
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
            <img style="height: 90px; width:100px; opacity: 1;" src="/img/logo.png" alt="">
            </a> <?php $currentUrl = ""; ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Inicio',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Profesionales',
                        ['controller' => 'users', 'action' => 'lookinProfesional'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'lookinprofesional'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<i class="far fa-circle nav-icon"></i> Sign Up',
                        ['controller' => 'Users', 'action' => 'login'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                    <?= $this->Html->link(
                        '<button type="button" class="btn btn-offer"><i class="far fa-circle nav-icon"></i> Ofrecer Servicios</button>',
                        ['controller' => 'Profesional', 'action' => 'add'],
                        ['class' => ($currentUrl == $this->Url->build(['controller' => 'users', 'action' => 'login'])) ? 'nav-link active' : 'nav-link', 'escape' => false]
                    ) ?>
                </form>
            </div>
        </nav>
    <?php endif ?>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</body>

</html>
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary   navbar-dark bg-dark text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4  border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="perro navbar-dark bg-dark">
        <div class="container text-center  navbar-dark bg-dark text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <div class="  navbar-dark bg-dark col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img class="logo-footer" src="/img/logo.png" alt="">
                    </div>
                </div>
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Proyecto de Titulo
                    </h6>
                    <p>
                        Este es el portafolio de titulo para la carrera analista programador computacional
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="  navbar-dark bg-dark col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Servicios
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Cerrajero</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Electricista</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Gasfiter</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4  navbar-dark bg-dark">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                    <p><i class="fas fa-home me-3"></i> Padre Alonso de Ovalle, Chile</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        max.cruzg@duocuc.cl
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        max.cruzg@duocuc.cl
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>


<style>
    body {
        font-family: 'Montserrat', sans-serif !important;
    }

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
        font-weight: bolder;
        text-transform: uppercase;

    }

    a:hover {
        background-color: #d5c01d !important;
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