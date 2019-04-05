<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bagtypecoffe $bagtypecoffe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bagtypecoffe'), ['action' => 'edit', $bagtypecoffe->typeCoffe_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bagtypecoffe'), ['action' => 'delete', $bagtypecoffe->typeCoffe_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bagtypecoffe->typeCoffe_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bagtypecoffe'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bagtypecoffe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bagtypecoffe view large-9 medium-8 columns content">
    <h3><?= h($bagtypecoffe->typeCoffe_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TypeCoffe Id') ?></th>
            <td><?= $this->Number->format($bagtypecoffe->typeCoffe_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bag Id') ?></th>
            <td><?= $this->Number->format($bagtypecoffe->bag_id) ?></td>
        </tr>
    </table>
</div>
