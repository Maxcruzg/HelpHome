<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calification $calification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Calification'), ['action' => 'edit', $calification->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Calification'), ['action' => 'delete', $calification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calification->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Califications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Calification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="califications view content">
            <h3><?= h($calification->comentarios) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $calification->has('service') ? $this->Html->link($calification->service->name, ['controller' => 'Services', 'action' => 'view', $calification->service->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profesional') ?></th>
                    <td><?= $calification->has('profesional') ? $this->Html->link($calification->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $calification->profesional->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $calification->has('user') ? $this->Html->link($calification->user->name, ['controller' => 'Users', 'action' => 'view', $calification->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comentarios') ?></th>
                    <td><?= h($calification->comentarios) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($calification->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calificacion') ?></th>
                    <td><?= $this->Number->format($calification->calificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Calificacion') ?></th>
                    <td><?= h($calification->fecha_calificacion) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
