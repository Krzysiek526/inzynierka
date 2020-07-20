<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAnswer $userAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAnswer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAnswer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Answers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAnswers form large-9 medium-8 columns content">
    <?= $this->Form->create($userAnswer) ?>
    <fieldset>
        <legend><?= __('Edit User Answer') ?></legend>
        <?php
            echo $this->Form->control('test_id', ['options' => $tests]);
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('is_selected');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
