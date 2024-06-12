<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceHistory $serviceHistory
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $profesionals
 * @var \Cake\Collection\CollectionInterface|string[] $services
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Service History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceHistory form content">
            <?= $this->Form->create($serviceHistory) ?>
            <fieldset>
                <legend><?= __('Add Service History') ?></legend>
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
