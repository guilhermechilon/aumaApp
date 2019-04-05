<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Forklift $forklift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $forklift->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $forklift->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Forklift'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Solicitation'), ['controller' => 'Solicitation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitation'), ['controller' => 'Solicitation', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="forklift form large-9 medium-8 columns content">
    <?= $this->Form->create($forklift) ?>
    <fieldset>
        <legend><?= __('Edit Forklift') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
