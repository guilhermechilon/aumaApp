<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Position'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Location'), ['controller' => 'Location', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Location', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="position view large-9 medium-8 columns content">
    <h3><?= h($position->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($position->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= $this->Number->format($position->description) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Location') ?></h4>
        <?php if (!empty($position->location)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Street Id') ?></th>
                <th scope="col"><?= __('Avenue Id') ?></th>
                <th scope="col"><?= __('Floor Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($position->location as $location): ?>
            <tr>
                <td><?= h($location->id) ?></td>
                <td><?= h($location->street_id) ?></td>
                <td><?= h($location->avenue_id) ?></td>
                <td><?= h($location->floor_id) ?></td>
                <td><?= h($location->position_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Location', 'action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Location', 'action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Location', 'action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
