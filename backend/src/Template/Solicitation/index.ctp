<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitation[]|\Cake\Collection\CollectionInterface $solicitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solicitation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitation index large-9 medium-8 columns content">
    <h3><?= __('Solicitation') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forklift_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateTime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitation as $solicitation): ?>
            <tr>
                <td><?= $this->Number->format($solicitation->id) ?></td>
                <td><?= $this->Number->format($solicitation->status_id) ?></td>
                <td><?= $this->Number->format($solicitation->forklift_id) ?></td>
                <td><?= $this->Number->format($solicitation->bag_id) ?></td>
                <td><?= h($solicitation->dateTime) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solicitation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitation->id)]) ?>
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
