<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecoffe $typecoffe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typecoffe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typecoffe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Typecoffe'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typecoffe form large-9 medium-8 columns content">
    <?= $this->Form->create($typecoffe) ?>
    <fieldset>
        <legend><?= __('Edit Typecoffe') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
