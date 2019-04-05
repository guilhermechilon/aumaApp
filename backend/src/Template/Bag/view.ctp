<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bag $bag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bag'), ['action' => 'edit', $bag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bag'), ['action' => 'delete', $bag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bag'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bagtypecoffe'), ['controller' => 'Bagtypecoffe', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitation'), ['controller' => 'Solicitation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitation'), ['controller' => 'Solicitation', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bag view large-9 medium-8 columns content">
    <h3><?= h($bag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lot') ?></th>
            <td><?= h($bag->lot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProducerName') ?></th>
            <td><?= h($bag->producerName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProducerFarm') ?></th>
            <td><?= h($bag->producerFarm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Id') ?></th>
            <td><?= $this->Number->format($bag->location_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($bag->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($bag->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City User') ?></th>
            <td><?= $this->Number->format($bag->city_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EntryData') ?></th>
            <td><?= h($bag->entryData) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OutDate') ?></th>
            <td><?= h($bag->outDate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bagtypecoffe') ?></h4>
        <?php if (!empty($bag->bagtypecoffe)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('TypeCoffe Id') ?></th>
                <th scope="col"><?= __('Bag Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bag->bagtypecoffe as $bagtypecoffe): ?>
            <tr>
                <td><?= h($bagtypecoffe->typeCoffe_id) ?></td>
                <td><?= h($bagtypecoffe->bag_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bagtypecoffe', 'action' => 'view', $bagtypecoffe->typeCoffe_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bagtypecoffe', 'action' => 'edit', $bagtypecoffe->typeCoffe_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bagtypecoffe', 'action' => 'delete', $bagtypecoffe->typeCoffe_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bagtypecoffe->typeCoffe_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Solicitation') ?></h4>
        <?php if (!empty($bag->solicitation)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Forklift Id') ?></th>
                <th scope="col"><?= __('Bag Id') ?></th>
                <th scope="col"><?= __('DateTime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bag->solicitation as $solicitation): ?>
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
