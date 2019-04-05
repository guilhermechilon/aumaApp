<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Location'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bag'), ['controller' => 'Bag', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bag'), ['controller' => 'Bag', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="location view large-9 medium-8 columns content">
    <h3><?= h($location->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Id') ?></th>
            <td><?= $this->Number->format($location->street_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avenue Id') ?></th>
            <td><?= $this->Number->format($location->avenue_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor Id') ?></th>
            <td><?= $this->Number->format($location->floor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position Id') ?></th>
            <td><?= $this->Number->format($location->position_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bag') ?></h4>
        <?php if (!empty($location->bag)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('EntryData') ?></th>
                <th scope="col"><?= __('OutDate') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Lot') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('ProducerName') ?></th>
                <th scope="col"><?= __('ProducerFarm') ?></th>
                <th scope="col"><?= __('City User') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->bag as $bag): ?>
            <tr>
                <td><?= h($bag->id) ?></td>
                <td><?= h($bag->entryData) ?></td>
                <td><?= h($bag->outDate) ?></td>
                <td><?= h($bag->location_id) ?></td>
                <td><?= h($bag->user_id) ?></td>
                <td><?= h($bag->lot) ?></td>
                <td><?= h($bag->weight) ?></td>
                <td><?= h($bag->producerName) ?></td>
                <td><?= h($bag->producerFarm) ?></td>
                <td><?= h($bag->city_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bag', 'action' => 'view', $bag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bag', 'action' => 'edit', $bag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bag', 'action' => 'delete', $bag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bag->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
