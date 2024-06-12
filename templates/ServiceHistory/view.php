<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceHistory $serviceHistory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service History'), ['action' => 'edit', $serviceHistory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service History'), ['action' => 'delete', $serviceHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceHistory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Service History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceHistory view content">
            <h3><?= h($serviceHistory->descripcion) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $serviceHistory->has('user') ? $this->Html->link($serviceHistory->user->name, ['controller' => 'Users', 'action' => 'view', $serviceHistory->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profesional') ?></th>
                    <td><?= $serviceHistory->has('profesional') ? $this->Html->link($serviceHistory->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $serviceHistory->profesional->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $serviceHistory->has('service') ? $this->Html->link($serviceHistory->service->name, ['controller' => 'Services', 'action' => 'view', $serviceHistory->service->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($serviceHistory->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($serviceHistory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observaciones') ?></th>
                    <td><?= $this->Number->format($serviceHistory->Observaciones) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Servicio') ?></th>
                    <td><?= h($serviceHistory->fecha_servicio) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
