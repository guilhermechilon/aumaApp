<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avenue $avenue
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avenue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avenue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avenue'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Location'), ['controller' => 'Location', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Location', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avenue form large-9 medium-8 columns content">
    <?= $this->Form->create($avenue) ?>
    <fieldset>
        <legend><?= __('Edit Avenue') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
