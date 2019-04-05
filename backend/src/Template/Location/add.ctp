<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Location'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bag'), ['controller' => 'Bag', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bag'), ['controller' => 'Bag', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="location form large-9 medium-8 columns content">
    <?= $this->Form->create($location) ?>
    <fieldset>
        <legend><?= __('Add Location') ?></legend>
        <?php
            echo $this->Form->control('street_id');
            echo $this->Form->control('avenue_id');
            echo $this->Form->control('floor_id');
            echo $this->Form->control('position_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
