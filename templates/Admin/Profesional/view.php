<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesional $profesional
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profesional'), ['action' => 'edit', $profesional->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profesional'), ['action' => 'delete', $profesional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesional->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profesional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profesional'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profesional view content">
            <h3><?= h($profesional->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $profesional->has('user') ? $this->Html->link($profesional->user->name, ['controller' => 'Users', 'action' => 'view', $profesional->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($profesional->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Experiencia') ?></th>
                    <td><?= h($profesional->experiencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Especialidad') ?></th>
                    <td><?= $profesional->has('especialidad') ? $this->Html->link($profesional->especialidad->name, ['controller' => 'Especialidad', 'action' => 'view', $profesional->especialidad->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profesional->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $this->Number->format($profesional->value) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Citas') ?></h4>
                <?php if (!empty($profesional->citas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Phone') ?></th>
                            <th><?= __('Client Email') ?></th>
                            <th><?= __('Client Direction') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Fecha Cita') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profesional->citas as $citas) : ?>
                        <tr>
                            <td><?= h($citas->id) ?></td>
                            <td><?= h($citas->client_phone) ?></td>
                            <td><?= h($citas->client_email) ?></td>
                            <td><?= h($citas->client_direction) ?></td>
                            <td><?= h($citas->description) ?></td>
                            <td><?= h($citas->fecha_cita) ?></td>
                            <td><?= h($citas->profesional_id) ?></td>
                            <td><?= h($citas->user_id) ?></td>
                            <td><?= h($citas->estado) ?></td>
                            <td><?= h($citas->comentarios) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Citas', 'action' => 'view', $citas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Citas', 'action' => 'edit', $citas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Citas', 'action' => 'delete', $citas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $citas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
