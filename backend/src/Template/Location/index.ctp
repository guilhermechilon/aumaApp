<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $location
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bag'), ['controller' => 'Bag', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bag'), ['controller' => 'Bag', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="location index large-9 medium-8 columns content">
    <h3><?= __('Location') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avenue_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('floor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($location as $location): ?>
            <tr>
                <td><?= $this->Number->format($location->id) ?></td>
                <td><?= $this->Number->format($location->street_id) ?></td>
                <td><?= $this->Number->format($location->avenue_id) ?></td>
                <td><?= $this->Number->format($location->floor_id) ?></td>
                <td><?= $this->Number->format($location->position_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
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
