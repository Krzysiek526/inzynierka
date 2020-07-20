<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń'),
                ['action' => 'delete', $subject->id],
                ['confirm' => __('Czy chcesz usunąć przedmiot # {0}?', $subject->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subjects form large-9 medium-8 columns content">
    <?= $this->Form->create($subject) ?>
    <fieldset>
        <legend><?= __('Edytuj przedmiot') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('courses._ids', ['options' => $courses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
