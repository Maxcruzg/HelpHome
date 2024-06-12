<?php $user = $this->request->getAttribute('identity'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/users" class="brand-link">
        <img src="/img/logo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HelpHome</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- //aqui tiene que ir el path de la imagen // -->
                <img src="/img/userlogo.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block"><?= $user->name . ' ' . $user->surname ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <?= $this->Html->link(
                        '<i class="far fa-calendar-check nav-icon"></i><p>Citas</p>',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['escape' => false, 'class' => 'nav-link']
                    ) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(
                        '<i class="far fa-calendar-check nav-icon"></i><p>Historial de Citas</p>',
                        ['controller' => 'Users', 'action' => 'historial'],
                        ['escape' => false, 'class' => 'nav-link']
                    ) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(
                        '<i class="far fa-user nav-icon"></i><p>Editar Perfil</p>',
                        ['controller' => 'Profesional', 'action' => 'edit'],
                        ['escape' => false, 'class' => 'nav-link']
                    ) ?>
                </li>
                <li class="nav-item">
                    <a href="/users/logout" class="nav-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Cerrar Sesión</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>