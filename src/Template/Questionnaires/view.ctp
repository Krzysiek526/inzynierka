<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionnaire $questionnaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionnaire'), ['action' => 'edit', $questionnaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionnaire'), ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionnaire'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionnaires view large-9 medium-8 columns content">
    <h3><?= h($questionnaire->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $questionnaire->has('user') ? $this->Html->link($questionnaire->user->username, ['controller' => 'Users', 'action' => 'view', $questionnaire->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($questionnaire->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($questionnaire->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionnaire->id) ?></td>
        </tr>
    </table>
</div>
