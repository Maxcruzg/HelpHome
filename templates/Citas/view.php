<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cita $cita
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cita'), ['action' => 'edit', $cita->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cita'), ['action' => 'delete', $cita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cita->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Citas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cita'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="citas view content">
            <h3><?= h($cita->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $cita->has('user') ? $this->Html->link($cita->user->name, ['controller' => 'Users', 'action' => 'view', $cita->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profesional') ?></th>
                    <td><?= $cita->has('profesional') ? $this->Html->link($cita->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $cita->profesional->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cita->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $this->Number->format($cita->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Inicio') ?></th>
                    <td><?= h($cita->fecha_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Termino') ?></th>
                    <td><?= h($cita->fecha_termino) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
