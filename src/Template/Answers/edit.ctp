<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń odpowiedź'),
                ['action' => 'delete', $answer->id],
                ['confirm' => __('Czy jesteś pewny, że chcesz usunąć odpowiedź # {0}?', $answer->text)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List odpowiedzi'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answers form large-9 medium-8 columns content">
    <?= $this->Form->create($answer) ?>
    <fieldset>
        <legend><?= __('Edytuj Odpowiedź') ?></legend>
        <?php
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('text');
            echo $this->Form->control('is_true');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
