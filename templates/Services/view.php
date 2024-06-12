<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($service->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripccion') ?></th>
                    <td><?= h($service->descripccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilidad') ?></th>
                    <td><?= $this->Number->format($service->disponibilidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duracion') ?></th>
                    <td><?= $this->Number->format($service->duracion) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Califications') ?></h4>
                <?php if (!empty($service->califications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Calificacion') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Fecha Calificacion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($service->califications as $califications) : ?>
                        <tr>
                            <td><?= h($califications->id) ?></td>
                            <td><?= h($califications->service_id) ?></td>
                            <td><?= h($califications->profesional_id) ?></td>
                            <td><?= h($califications->user_id) ?></td>
                            <td><?= h($califications->calificacion) ?></td>
                            <td><?= h($califications->comentarios) ?></td>
                            <td><?= h($califications->fecha_calificacion) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Califications', 'action' => 'view', $califications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Califications', 'action' => 'edit', $califications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Califications', 'action' => 'delete', $califications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $califications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Service History') ?></h4>
                <?php if (!empty($service->service_history)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Fecha Servicio') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Observaciones') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($service->service_history as $serviceHistory) : ?>
                        <tr>
                            <td><?= h($serviceHistory->id) ?></td>
                            <td><?= h($serviceHistory->user_id) ?></td>
                            <td><?= h($serviceHistory->profesional_id) ?></td>
                            <td><?= h($serviceHistory->service_id) ?></td>
                            <td><?= h($serviceHistory->fecha_servicio) ?></td>
                            <td><?= h($serviceHistory->descripcion) ?></td>
                            <td><?= h($serviceHistory->Observaciones) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ServiceHistory', 'action' => 'view', $serviceHistory->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ServiceHistory', 'action' => 'edit', $serviceHistory->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServiceHistory', 'action' => 'delete', $serviceHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceHistory->id)]) ?>
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
