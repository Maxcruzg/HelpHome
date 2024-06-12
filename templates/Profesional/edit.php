<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesional $profesional
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profesional->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profesional->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Profesional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profesional form content">
            <?= $this->Form->create($profesional) ?>
            <fieldset>
                <legend><?= __('Edit Profesional') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('phone');
                    echo $this->Form->control('name');
                    echo $this->Form->control('role_id', ['options' => $roles]);
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
