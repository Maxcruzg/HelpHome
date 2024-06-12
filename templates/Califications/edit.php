<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calification $calification
 * @var string[]|\Cake\Collection\CollectionInterface $services
 * @var string[]|\Cake\Collection\CollectionInterface $profesionals
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calification->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Califications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="califications form content">
            <?= $this->Form->create($calification) ?>
            <fieldset>
                <legend><?= __('Edit Calification') ?></legend>
                <?php
                    echo $this->Form->control('service_id', ['options' => $services]);
                    echo $this->Form->control('profesional_id', ['options' => $profesionals]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('calificacion');
                    echo $this->Form->control('comentarios');
                    echo $this->Form->control('fecha_calificacion', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
