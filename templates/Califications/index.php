<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Calification> $califications
 */
?>
<div class="califications index content">
    <?= $this->Html->link(__('New Calification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Califications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('profesional_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('calificacion') ?></th>
                    <th><?= $this->Paginator->sort('comentarios') ?></th>
                    <th><?= $this->Paginator->sort('fecha_calificacion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($califications as $calification): ?>
                <tr>
                    <td><?= $this->Number->format($calification->id) ?></td>
                    <td><?= $calification->has('service') ? $this->Html->link($calification->service->name, ['controller' => 'Services', 'action' => 'view', $calification->service->id]) : '' ?></td>
                    <td><?= $calification->has('profesional') ? $this->Html->link($calification->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $calification->profesional->id]) : '' ?></td>
                    <td><?= $calification->has('user') ? $this->Html->link($calification->user->name, ['controller' => 'Users', 'action' => 'view', $calification->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($calification->calificacion) ?></td>
                    <td><?= h($calification->comentarios) ?></td>
                    <td><?= h($calification->fecha_calificacion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $calification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calification->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
