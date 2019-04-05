<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bag[]|\Cake\Collection\CollectionInterface $bag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitation'), ['controller' => 'Solicitation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitation'), ['controller' => 'Solicitation', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bag index large-9 medium-8 columns content">
    <h3><?= __('Bag') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entryData') ?></th>
                <th scope="col"><?= $this->Paginator->sort('outDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producerName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producerFarm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_user') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bag as $bag): ?>
            <tr>
                <td><?= $this->Number->format($bag->id) ?></td>
                <td><?= h($bag->entryData) ?></td>
                <td><?= h($bag->outDate) ?></td>
                <td><?= $this->Number->format($bag->location_id) ?></td>
                <td><?= $this->Number->format($bag->user_id) ?></td>
                <td><?= h($bag->lot) ?></td>
                <td><?= $this->Number->format($bag->weight) ?></td>
                <td><?= h($bag->producerName) ?></td>
                <td><?= h($bag->producerFarm) ?></td>
                <td><?= $this->Number->format($bag->city_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bag->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
