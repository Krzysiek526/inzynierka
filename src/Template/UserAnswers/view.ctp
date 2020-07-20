<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAnswer $userAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Answer'), ['action' => 'edit', $userAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Answer'), ['action' => 'delete', $userAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userAnswers view large-9 medium-8 columns content">
    <h3><?= h($userAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Test') ?></th>
            <td><?= $userAnswer->has('test') ? $this->Html->link($userAnswer->test->name, ['controller' => 'Tests', 'action' => 'view', $userAnswer->test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $userAnswer->has('question') ? $this->Html->link($userAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $userAnswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userAnswer->has('user') ? $this->Html->link($userAnswer->user->id, ['controller' => 'Users', 'action' => 'view', $userAnswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Selected') ?></th>
            <td><?= $userAnswer->is_selected ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
