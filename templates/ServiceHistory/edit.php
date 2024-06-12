<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceHistory $serviceHistory
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $profesionals
 * @var string[]|\Cake\Collection\CollectionInterface $services
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviceHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceHistory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Service History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceHistory form content">
            <?= $this->Form->create($serviceHistory) ?>
            <fieldset>
                <legend><?= __('Edit Service History') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('profesional_id', ['options' => $profesionals]);
                    echo $this->Form->control('service_id', ['options' => $services]);
                    echo $this->Form->control('fecha_servicio', ['empty' => true]);
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('Observaciones');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
