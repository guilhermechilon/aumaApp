<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Forklift $forklift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Forklift'), ['action' => 'edit', $forklift->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forklift'), ['action' => 'delete', $forklift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $forklift->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forklift'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forklift'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitation'), ['controller' => 'Solicitation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitation'), ['controller' => 'Solicitation', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="forklift view large-9 medium-8 columns content">
    <h3><?= h($forklift->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($forklift->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($forklift->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Solicitation') ?></h4>
        <?php if (!empty($forklift->solicitation)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Forklift Id') ?></th>
                <th scope="col"><?= __('Bag Id') ?></th>
                <th scope="col"><?= __('DateTime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($forklift->solicitation as $solicitation): ?>
            <tr>
                <td><?= h($solicitation->id) ?></td>
                <td><?= h($solicitation->status_id) ?></td>
                <td><?= h($solicitation->forklift_id) ?></td>
                <td><?= h($solicitation->bag_id) ?></td>
                <td><?= h($solicitation->dateTime) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Solicitation', 'action' => 'view', $solicitation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitation', 'action' => 'edit', $solicitation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitation', 'action' => 'delete', $solicitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
