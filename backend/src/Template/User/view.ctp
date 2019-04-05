<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bag'), ['controller' => 'Bag', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bag'), ['controller' => 'Bag', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TypeUser Id') ?></th>
            <td><?= $this->Number->format($user->typeUser_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bag') ?></h4>
        <?php if (!empty($user->bag)): ?>
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
            <?php foreach ($user->bag as $bag): ?>
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
