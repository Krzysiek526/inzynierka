<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń'),
                ['action' => 'delete', $question->id],
                ['confirm' => __('Jesteś pewny, że chcesz usunąć pytanie: # {0}?', $question->text)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista pytań'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista odpowiedzi'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkowników'), ['controller' => 'UserAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista testów'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Edytuj pytanie') ?></legend>
        <?php
            echo $this->Form->control('text');
            echo $this->Form->control('tests._ids', ['options' => $tests]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
