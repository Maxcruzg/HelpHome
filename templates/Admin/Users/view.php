<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($user->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= $user->has('region') ? $this->Html->link($user->region->regiones, ['controller' => 'Regions', 'action' => 'view', $user->region->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comuna') ?></th>
                    <td><?= $user->has('comuna') ? $this->Html->link($user->comuna->comuna, ['controller' => 'Comunas', 'action' => 'view', $user->comuna->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <td><?= $user->has('provincia') ? $this->Html->link($user->provincia->provincia, ['controller' => 'Provincias', 'action' => 'view', $user->provincia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($user->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Profesional') ?></th>
                    <td><?= $user->is_profesional ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Califications') ?></h4>
                <?php if (!empty($user->califications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Calificacion') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Fecha Calificacion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->califications as $califications) : ?>
                        <tr>
                            <td><?= h($califications->id) ?></td>
                            <td><?= h($califications->service_id) ?></td>
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
                <h4><?= __('Related Citas') ?></h4>
                <?php if (!empty($user->citas)) : ?>
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
                        <?php foreach ($user->citas as $citas) : ?>
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
            <div class="related">
                <h4><?= __('Related Profesional') ?></h4>
                <?php if (!empty($user->profesional)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Experiencia') ?></th>
                            <th><?= __('Especialidad Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->profesional as $profesional) : ?>
                        <tr>
                            <td><?= h($profesional->id) ?></td>
                            <td><?= h($profesional->user_id) ?></td>
                            <td><?= h($profesional->path) ?></td>
                            <td><?= h($profesional->value) ?></td>
                            <td><?= h($profesional->experiencia) ?></td>
                            <td><?= h($profesional->especialidad_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profesional', 'action' => 'view', $profesional->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profesional', 'action' => 'edit', $profesional->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profesional', 'action' => 'delete', $profesional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesional->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Service History') ?></h4>
                <?php if (!empty($user->service_history)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Fecha Servicio') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Observaciones') ?></th>
                            <th><?= __('Profesional Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->service_history as $serviceHistory) : ?>
                        <tr>
                            <td><?= h($serviceHistory->id) ?></td>
                            <td><?= h($serviceHistory->user_id) ?></td>
                            <td><?= h($serviceHistory->service_id) ?></td>
                            <td><?= h($serviceHistory->fecha_servicio) ?></td>
                            <td><?= h($serviceHistory->descripcion) ?></td>
                            <td><?= h($serviceHistory->Observaciones) ?></td>
                            <td><?= h($serviceHistory->profesional_id) ?></td>
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
            <div class="related">
                <h4><?= __('Related Token') ?></h4>
                <?php if (!empty($user->token)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Expiration') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->token as $token) : ?>
                        <tr>
                            <td><?= h($token->id) ?></td>
                            <td><?= h($token->user_id) ?></td>
                            <td><?= h($token->token) ?></td>
                            <td><?= h($token->expiration) ?></td>
                            <td><?= h($token->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Token', 'action' => 'view', $token->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Token', 'action' => 'edit', $token->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Token', 'action' => 'delete', $token->id], ['confirm' => __('Are you sure you want to delete # {0}?', $token->id)]) ?>
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
