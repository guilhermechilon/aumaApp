<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bagtypecoffe $bagtypecoffe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bagtypecoffe'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bagtypecoffe form large-9 medium-8 columns content">
    <?= $this->Form->create($bagtypecoffe) ?>
    <fieldset>
        <legend><?= __('Add Bagtypecoffe') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
