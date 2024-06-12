<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServiceHistory> $serviceHistory
 */
?>
<div class="serviceHistory index content">
    <?= $this->Html->link(__('New Service History'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Service History') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('profesional_id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_servicio') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('Observaciones') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviceHistory as $serviceHistory): ?>
                <tr>
                    <td><?= $this->Number->format($serviceHistory->id) ?></td>
                    <td><?= $serviceHistory->has('user') ? $this->Html->link($serviceHistory->user->name, ['controller' => 'Users', 'action' => 'view', $serviceHistory->user->id]) : '' ?></td>
                    <td><?= $serviceHistory->has('profesional') ? $this->Html->link($serviceHistory->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $serviceHistory->profesional->id]) : '' ?></td>
                    <td><?= $serviceHistory->has('service') ? $this->Html->link($serviceHistory->service->name, ['controller' => 'Services', 'action' => 'view', $serviceHistory->service->id]) : '' ?></td>
                    <td><?= h($serviceHistory->fecha_servicio) ?></td>
                    <td><?= h($serviceHistory->descripcion) ?></td>
                    <td><?= $this->Number->format($serviceHistory->Observaciones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceHistory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceHistory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceHistory->id)]) ?>
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
