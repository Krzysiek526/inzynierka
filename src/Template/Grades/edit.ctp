<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń ocene'),
                ['action' => 'delete', $grade->id],
                ['confirm' => __('Jesteś pewny, że chcesz usunąć ocene # {0}?', $grade->grade)]
            )
        ?></li>
         <li><?= $this->Html->link(__('Lista ocen'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista użytkowników'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy użytkownik'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista testów'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grades form large-9 medium-8 columns content">
    <?= $this->Form->create($grade) ?>
    <fieldset>
        <legend><?= __('Edit Grade') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('subject_id', ['options' => $subjects]);
            echo $this->Form->control('test_id', ['options' => $tests]);
            echo $this->Form->control('grade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
