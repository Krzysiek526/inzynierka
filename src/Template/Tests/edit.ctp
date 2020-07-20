<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń test'),
                ['action' => 'delete', $test->id],
                ['confirm' => __('Czy jesteś pewny, że chcesz usunąć # {0}?', $test->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista testów'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkownikó'), ['controller' => 'UserAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tests form large-9 medium-8 columns content">
    <?= $this->Form->create($test) ?>
    <fieldset>
        <legend><?= __('Edytuj test') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('date');
            echo $this->Form->control('questions._ids', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
