<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bag $bag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bag'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitation'), ['controller' => 'Solicitation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitation'), ['controller' => 'Solicitation', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bag form large-9 medium-8 columns content">
    <?= $this->Form->create($bag) ?>
    <fieldset>
        <legend><?= __('Add Bag') ?></legend>
        <?php
            echo $this->Form->control('entryData');
            echo $this->Form->control('outDate', ['empty' => true]);
            echo $this->Form->control('location_id');
            echo $this->Form->control('user_id');
            echo $this->Form->control('lot');
            echo $this->Form->control('weight');
            echo $this->Form->control('producerName');
            echo $this->Form->control('producerFarm');
            echo $this->Form->control('city_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
