<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Token $token
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Token'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="token form content">
            <?= $this->Form->create($token) ?>
            <fieldset>
                <legend><?= __('Add Token') ?></legend>
                <?php
                    echo $this->Form->control('token');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
