<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń kurs'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Jesteś pewny, że chcesz usunąć kurs # {0}?', $course->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista użytkowników'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy użytkownik'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Edytuj kurs') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('date');
            echo $this->Form->control('subjects._ids', ['options' => $subjects]);
            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
