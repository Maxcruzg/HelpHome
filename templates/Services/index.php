<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Service> $services
 */
?>
<div class="services index content">
    <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Services') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('descripccion') ?></th>
                    <th><?= $this->Paginator->sort('disponibilidad') ?></th>
                    <th><?= $this->Paginator->sort('duracion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $this->Number->format($service->id) ?></td>
                    <td><?= h($service->name) ?></td>
                    <td><?= h($service->descripccion) ?></td>
                    <td><?= $this->Number->format($service->disponibilidad) ?></td>
                    <td><?= $this->Number->format($service->duracion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
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
