<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecoffe $typecoffe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typecoffe'), ['action' => 'edit', $typecoffe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typecoffe'), ['action' => 'delete', $typecoffe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecoffe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typecoffe'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typecoffe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typecoffe view large-9 medium-8 columns content">
    <h3><?= h($typecoffe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($typecoffe->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typecoffe->id) ?></td>
        </tr>
    </table>
</div>
