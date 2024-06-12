<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cita> $citas
 */
?>
<div class="citas index content">
    <?= $this->Html->link(__('New Cita'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Citas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('profesional_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                    <th><?= $this->Paginator->sort('fecha_termino') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($citas as $cita): ?>
                <tr>
                    <td><?= $this->Number->format($cita->id) ?></td>
                    <td><?= $cita->has('user') ? $this->Html->link($cita->user->name, ['controller' => 'Users', 'action' => 'view', $cita->user->id]) : '' ?></td>
                    <td><?= $cita->has('profesional') ? $this->Html->link($cita->profesional->name, ['controller' => 'Profesionals', 'action' => 'view', $cita->profesional->id]) : '' ?></td>
                    <td><?= h($cita->fecha_inicio) ?></td>
                    <td><?= h($cita->fecha_termino) ?></td>
                    <td><?= $this->Number->format($cita->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cita->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cita->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cita->id)]) ?>
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
