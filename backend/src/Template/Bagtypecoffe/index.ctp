<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bagtypecoffe[]|\Cake\Collection\CollectionInterface $bagtypecoffe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bagtypecoffe'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bagtypecoffe index large-9 medium-8 columns content">
    <h3><?= __('Bagtypecoffe') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('typeCoffe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bagtypecoffe as $bagtypecoffe): ?>
            <tr>
                <td><?= $this->Number->format($bagtypecoffe->typeCoffe_id) ?></td>
                <td><?= $this->Number->format($bagtypecoffe->bag_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bagtypecoffe->typeCoffe_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bagtypecoffe->typeCoffe_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bagtypecoffe->typeCoffe_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bagtypecoffe->typeCoffe_id)]) ?>
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
