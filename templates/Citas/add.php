<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cita $cita
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $profesionals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Citas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="citas form content">
            <?= $this->Form->create($cita) ?>
            <fieldset>
                <legend><?= __('Add Cita') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('profesional_id', ['options' => $profesionals]);
                    echo $this->Form->control('fecha_inicio', ['empty' => true]);
                    echo $this->Form->control('fecha_termino', ['empty' => true]);
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
