<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitation $solicitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitation'), ['action' => 'edit', $solicitation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitation'), ['action' => 'delete', $solicitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitation'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitation view large-9 medium-8 columns content">
    <h3><?= h($solicitation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solicitation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Id') ?></th>
            <td><?= $this->Number->format($solicitation->status_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forklift Id') ?></th>
            <td><?= $this->Number->format($solicitation->forklift_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bag Id') ?></th>
            <td><?= $this->Number->format($solicitation->bag_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateTime') ?></th>
            <td><?= h($solicitation->dateTime) ?></td>
        </tr>
    </table>
</div>
