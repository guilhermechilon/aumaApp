<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeuser $typeuser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typeuser'), ['action' => 'edit', $typeuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typeuser'), ['action' => 'delete', $typeuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typeuser'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeuser'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeuser view large-9 medium-8 columns content">
    <h3><?= h($typeuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($typeuser->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeuser->id) ?></td>
        </tr>
    </table>
</div>
