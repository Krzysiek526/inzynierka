<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAnswer[]|\Cake\Collection\CollectionInterface $userAnswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAnswers index large-9 medium-8 columns content">
    <h3><?= __('User Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_selected') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAnswers as $userAnswer): ?>
            <tr>
                <td><?= $this->Number->format($userAnswer->id) ?></td>
                <td><?= $userAnswer->has('test') ? $this->Html->link($userAnswer->test->name, ['controller' => 'Tests', 'action' => 'view', $userAnswer->test->id]) : '' ?></td>
                <td><?= $userAnswer->has('question') ? $this->Html->link($userAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $userAnswer->question->id]) : '' ?></td>
                <td><?= $userAnswer->has('user') ? $this->Html->link($userAnswer->user->id, ['controller' => 'Users', 'action' => 'view', $userAnswer->user->id]) : '' ?></td>
                <td><?= h($userAnswer->is_selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAnswer->id)]) ?>
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
